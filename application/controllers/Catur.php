<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catur extends CI_Controller {

	public function index()
	{
    $data['judul'] = 'Catur Udinus';
    $this->load->view('templates/header_catur', $data);
    $this->load->view('catur/catur_view');
    $this->load->view('templates/footer_catur');
  }
  public function event1()
  {
    $data['judul'] = 'Event Catur Udinus';
    $this->load->view('templates/header_catur', $data);
    $this->load->view('catur/event1_view');
    $this->load->view('templates/footer_catur');
  }
  public function event2()
  {
    $data['judul'] = 'Event Catur Udinus';
    $this->load->view('templates/header_catur', $data);
    $this->load->view('catur/event2_view');
    $this->load->view('templates/footer_catur');
  }
}
