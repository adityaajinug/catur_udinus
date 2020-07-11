<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }
  public function index()
  {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header_user', $data);
    $this->load->view('templates/sidebar_user', $data);
    $this->load->view('templates/topbar_user', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer_user');
  }
  public function data_anggota()
  {
    $data['judul'] = 'Data Anggota';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['database'] =  $this->db->get('user')->result_array();

    $this->load->view('templates/header_user', $data);
    $this->load->view('templates/sidebar_user', $data);
    $this->load->view('templates/topbar_user', $data);
    $this->load->view('admin/data_anggota', $data);
    $this->load->view('templates/footer_user');
  }

  public function hapus($id)
  {
    $this->load->model('Admin_model');
    $this->Admin_model->hapus($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah dihapus
    </div>');
    redirect('admin/data_anggota');
  }
  public function jadwal()
  {
    $data['judul'] = 'Kelola Jadwal';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


    $data['jadwal'] = $this->db->get('jadwal')->result_array();

    $this->form_validation->set_rules('hari', 'Hari', 'required|trim');
    $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
    $this->form_validation->set_rules('waktu', 'Waktu', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('admin/kelola_jadwal', $data);
      $this->load->view('templates/footer_user');
    } else {
      $data = [
        'hari' => $this->input->post('hari'),
        'tanggal' => $this->input->post('tanggal'),
        'waktu' => $this->input->post('waktu'),
      ];
      $this->db->insert('jadwal', $data);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Jadwal telah ditambahkan
    </div>');
      redirect('admin/jadwal');
    }
  }
  public function hapus_jadwal($id)
  {
    $this->load->model('Admin_model');
    $this->Admin_model->hapus_jadwal($id);
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah dihapus
    </div>');
    redirect('admin/jadwal');
  }
  public function edit_data_anggota($id)
  {
    $data['judul'] = 'Edit Data Anggota';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Admin_model');
    $data['anggota'] = $this->Admin_model->userId($id);

    $data['bidang'] = ['Publikasi Dokumentasi', 'Sekretaris', 'Perkap dan Perwasitan', 'Bendahara'];

    $this->form_validation->set_rules('nim', 'nim', 'required|trim');
    $this->form_validation->set_rules('nama', 'nama', 'required|trim');
    $this->form_validation->set_rules('fakultas', 'fakultas', 'required');
    $this->form_validation->set_rules('prodi', 'prodi', 'required');
    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('admin/edit_data_anggota', $data);
      $this->load->view('templates/footer_user');
    } else {
      $this->Admin_model->edit_data();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah diubah
    </div>');
      redirect('admin/data_anggota');
    }
  }
  public function edit_jadwal($id)
  {
    $data['judul'] = 'Edit Jadwal';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('Admin_model');
    $data['jad'] = $this->Admin_model->editjadwalId($id);

    $this->form_validation->set_rules('hari', 'hari', 'required|trim');
    $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
    $this->form_validation->set_rules('waktu', 'waktu', 'required');
    if ($this->form_validation->run() == false) {

      $this->load->view('templates/header_user', $data);
      $this->load->view('templates/sidebar_user', $data);
      $this->load->view('templates/topbar_user', $data);
      $this->load->view('admin/edit_jadwal', $data);
      $this->load->view('templates/footer_user');
    } else {
      $this->Admin_model->edit_jadwal();
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
      Data telah diubah
    </div>');
      redirect('admin/jadwal');
    }
  }
  public function exportpdf()
  {
    $this->load->library('dompdf_gen');
    $data['anggota'] = $this->db->get('user')->result_array();
    $this->load->view('export/pdf', $data);
    $paper_size = 'A4';
    $orientation = 'potrait';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("anggota_catur.pdf", array('Attachment => 1'));
  }
}
