<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $data['judul'] = 'Menu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer_user');
    } else {
      $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Menu telah ditambahkan
    </div>');
      redirect('menu');
    }
  }
  public function submenu()
  {
    $data['judul'] = 'Submenu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Menu_model', 'menu');

    $data['submenu'] = $this->menu->getAllsubmenu();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('judul', 'Juduk', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'URL', 'required');
    $this->form_validation->set_rules('icon', 'icon', 'required');

    if ($this->form_validation->run() ==  false) {
      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('menu/submenu', $data);
      $this->load->view('templates/footer_user');
    } else {
      $data = [
        'judul' => $this->input->post('judul'),
        'menu_id' => $this->input->post('menu_id'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active')
      ];
      $this->db->insert('user_sub_menu', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
      redirect('menu/submenu');
    }
  }
  public function tampil()
  {
    $data['judul'] = 'Tampil Menu & Submenu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    // $this->load->model('Menu_model', 'menu');
    // $data['submenu'] = $this->menu->getsubmenu();
    $data['access'] = $this->db->get('user_access_menu')->result_array();

    $this->form_validation->set_rules('role_id', 'Role', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('menu/tampil_menu', $data);
      $this->load->view('templates/footer_user');
    } else {
      $data = [
        'role_id' => $this->input->post('role_id'),
        'menu_id' => $this->input->post('menu_id'),
      ];
      $this->db->insert('user_access_menu', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      subMenu telah ditambahkan
    </div>');
      redirect('menu/tampil');
    }
  }
  public function hapus_menu($id)
  {
    $this->load->model('Menu_model');
    $this->Menu_model->hapus_menu($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah dihapus
    </div>');
    redirect('menu');
  }

  public function hapus_tampil($id)
  {
    $this->load->model('Menu_model');
    $this->Menu_model->hapus_tampil($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah dihapus
    </div>');
    redirect('menu/tampil');
  }
  public function hapussub($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user_sub_menu');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    Data telah dihapus
  </div>');
    redirect('menu/submenu');
  }
  public function edit_menu($id)
  {
    $data['judul'] = 'Edit Menu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Menu_model');
    $data['menu'] = $this->Menu_model->menuId($id);

    $this->form_validation->set_rules('menu', 'menu', 'required');
    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('menu/edit_menu', $data);
      $this->load->view('templates/footer_user');
    } else {
      $this->Menu_model->edit_menu();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah diubah
    </div>');
      redirect('menu/index');
    }
  }
  public function edit_sub_menu($id)
  {
    $data['judul'] = 'Edit Submenu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Menu_model', 'menu');

    $data['submenu'] = $this->menu->submenuId($id);
    $data['menu'] = $this->db->get('user_menu')->result_array();


    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'URL', 'required');
    $this->form_validation->set_rules('icon', 'icon', 'required');

    if ($this->form_validation->run() ==  false) {
      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('menu/edit_sub_menu', $data);
      $this->load->view('templates/footer_user');
    } else {
      $this->menu->edit_sub_menu();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah diubah
    </div>');
      redirect('menu/submenu');
    }
  }
  public function edit_access_menu($id)
  {
    $data['judul'] = 'Edit Tampil Menu & Submenu';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Menu_model');
    $data['access'] = $this->Menu_model->tampilmenuId($id);

    $this->form_validation->set_rules('role_id', 'role_id', 'required');
    $this->form_validation->set_rules('menu_id', 'menu_id', 'required');
    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('menu/edit_tampil_menu', $data);
      $this->load->view('templates/footer_user');
    } else {
      $this->Menu_model->edit_access_menu();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah diubah
    </div>');
      redirect('menu/tampil');
    }
  }
}
