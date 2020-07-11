<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  public function edit_data()
  {
    $data = [
      'nim' => $this->input->post('nim', true),
      'nama' => $this->input->post('nama', true),
      'fakultas' => $this->input->post('fakultas', true),
      'prodi' => $this->input->post('prodi', true),
      'bidang' => $this->input->post('bidang', true),
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user', $data);
  }
  public function hapus($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
  public function hapus_jadwal($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('jadwal');
  }
  public function get_data($limit, $start)
  {
    return $this->db->get('jadwal', $limit, $start)->result_array();
  }
  public function countAlldata()
  {
    return $this->db->get('jadwal')->num_rows();
  }
  public function editjadwalId($id)
  {
    return $this->db->get_where('jadwal', ['id' => $id])->row_array();
  }
  public function userId($id)
  {
    return $this->db->get_where('user', ['id' => $id])->row_array();
  }
  public function edit_jadwal()
  {
    $data = [
      'hari' => $this->input->post('hari', true),
      'tanggal' => $this->input->post('tanggal', true),
      'waktu' => $this->input->post('waktu', true),
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('jadwal', $data);
  }
}
