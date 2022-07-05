<?php


/**
 *
 */
class Home extends CI_Controller
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
    $this->load->model('User_model');
  }

  public function index(){

		if($this->session->userdata('status') != "login_user"){
			redirect(base_url('user/login'));
		}
    $this->load->view('pages/user/header');
		$this->load->view('pages/user/home');
		$this->load->view('pages/user/footer');
	}

  public function api(){

		if($this->session->userdata('status') != "login_user"){
			redirect(base_url('user/login'));
		}

    $data['penyakit'] = $this->Admin_model->getAll_penyakit()->num_rows();
    $data['gejala'] = $this->Admin_model->getAll_gejala()->num_rows();
    $data['rule'] = $this->Admin_model->getAll_rule()->num_rows();

    echo json_encode($data);
	}

}