<?php


/**
 *
 */
class Daftar extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('upload');
    $this->load->helper('url_helper');
    $this->load->helper('text');
    $this->load->helper('date');
    $this->load->library('pagination');
    $this->load->model('Admin_model');
  }

    public function index(){

		if($this->session->userdata('status') == "login"){
			redirect(base_url('admin/home'));
		}

		$this->load->view('pages/admin/daftar');
	}

    public function proses_daftar(){

    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $hp = $this->input->post('hp');
    $alamat = $this->input->post('alamat');
    $password = $this->input->post('password');

		$data = array(
      'nama' => $nama,
			'email' => $email,
			'hp' => $hp,
			'alamat' => $alamat,
			'password' => $password
    );

    if($this->Admin_model->insert_user($data) == TRUE) {
          $this->session->set_flashdata('tambah', true);
     }
     else {
          $this->session->set_flashdata('tambah', false);
     }

     redirect(base_url('admin/daftar'));
    }
}
