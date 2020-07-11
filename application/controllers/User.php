<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }
  public function index()
  {
    $data['judul'] = 'Profile Saya';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header_user', $data);
    $this->load->view('templates/sidebar_user', $data);
    $this->load->view('templates/topbar_user', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer_user');
  }
  public function editprofile()
  {
    $data['judul'] = 'Edit Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('user/edit_profile', $data);
      $this->load->view('templates/footer_user');
    } else {
      $config['upload_path']   = './assets/sb-admin/img/profile/';
      $config['allowed_types'] = 'jpg|png|gif';
      $config['max_size']      = '2048000';
      // $config['max_width']     = '1024';
      // $config['max_height']    = '768';
      $config['file_name']     = url_title($this->input->post('image'));
      $filename = $this->upload->file_name;
      $this->upload->initialize($config);
      $this->upload->do_upload('image');
      $data = $this->upload->data();

      // $name = $this->input->post('nama');
      $email = $this->input->post('email');
      $data = array(
        'nama' => $this->input->post('nama'),
        'image'       => $data['file_name']
      );
      // $this->db->set('nama', $name);
      $this->db->where('email', $email);
      $this->db->update('user', $data);

      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Profile telah diubah</div>');
      redirect('user');
    }
  }
  public function jadwal()
  {
    $data['judul'] = 'Jadwal Latihan';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Admin_model');
    $this->load->library('pagination');
    $config['base_url'] = 'http://localhost/codeigneter/catur_udinus/user/jadwal';
    $config['total_rows'] = $this->Admin_model->countAlldata();
    $config['per_page'] = 3;

    $config['full_tag_open'] = '<nav><ul class="pagination">';
    $config['full_tag_close'] = '</ul>
    </nav>';
    $config['first_link'] = 'Awal';
    $config['first_tag_open'] = ' <li class="page-item">';
    $config['first_tag_close'] = ' </li>';

    $config['last_link'] = 'Akhir';
    $config['last_tag_open'] = ' <li class="page-item">';
    $config['last_tag_close'] = ' </li>';

    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = ' <li class="page-item">';
    $config['next_tag_close'] = ' </li>';

    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = ' <li class="page-item">';
    $config['prev_tag_close'] = ' </li>';

    $config['cur_tag_open'] = ' <li class="page-item active"><a class="page-link" href="#">';
    $config['cur_tag_close'] = ' </a></li>';

    $config['num_tag_open'] = ' <li class="page-item">';
    $config['num_tag_close'] = ' </li>';

    $config['attributes'] = array('class' => 'page-link');
    $this->pagination->initialize($config);

    $data['start'] = $this->uri->segment(3);
    // $data['database'] =  $this->Admin_model->get_data($config['per_page'], $data['start']);
    $data['jadwal'] = $this->Admin_model->get_data($config['per_page'], $data['start']);


    $this->load->view('templates/header_user', $data);
    $this->load->view('templates/sidebar_user', $data);
    $this->load->view('templates/topbar_user', $data);
    $this->load->view('user/jadwal_latihan', $data);
    $this->load->view('templates/footer_user');
  }
  public function ganti_password()
  {
    $data['judul'] = 'Ganti Password';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
    $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('user/ganti_password', $data);
      $this->load->view('templates/footer_user');
    } else {
      $current_password = $this->input->post('current_password');
      $new_password = $this->input->post('new_password1');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Awal!</div>');
        redirect('user/ganti_password');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Baru tidak boleh sama dengan password awal!</div>');
          redirect('user/ganti_password');
        } else {
          // password sudah ok
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

          $this->db->set('password', $password_hash);
          $this->db->where('email', $this->session->userdata('email'));
          $this->db->update('user');

          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Password telah diubah!</div>');
          redirect('user/ganti_password');
        }
      }
    }
  }
}
