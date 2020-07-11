<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
  public function getmenu()
  {
    return $this->db->get('user_menu')->result_array();
  }
  public function getAllsubmenu()
  {
    $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu` FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`. `menu_id` = `user_menu`.`id`
    ";
    return $this->db->query($query)->result_array();
  }
  public function hapus_menu($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user_menu');
  }
  public function hapus_tampil($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user_access_menu');
  }
  public function menuId($id)
  {
    return $this->db->get_where('user_menu', ['id' => $id])->row_array();
  }
  public function edit_menu()
  {
    $data = [
      'menu' => $this->input->post('menu', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user_menu', $data);
  }
  public function submenuId($id)
  {
    return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
  }
  public function edit_sub_menu()
  {
    $data = [
      'judul' => $this->input->post('judul', true),
      'menu_id' => $this->input->post('menu_id', true),
      'url' => $this->input->post('url', true),
      'icon' => $this->input->post('icon', true),
      'is_active' => $this->input->post('is_active', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user_sub_menu', $data);
  }
  public function tampilmenuId($id)
  {
    return $this->db->get_where('user_access_menu', ['id' => $id])->row_array();
  }
  public function edit_access_menu()
  {
    $data = [
      'role_id' => $this->input->post('role_id', true),
      'menu_id' => $this->input->post('menu_id', true),
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('user_access_menu', $data);
  }
}
