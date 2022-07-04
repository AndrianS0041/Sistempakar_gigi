<?php


/**
 *
 */
class Konsultasi extends CI_Controller
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

		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $data['konsultasi'] = $this->Admin_model->getAll_konsultasi()->result();

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/konsultasi',$data);
		$this->load->view('pages/admin/footer');
	}

    public function hapus(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_jawaban = $this->uri->segment(4);

		$this->Admin_model->delete_gejala($id_jawaban);

		redirect(base_url('admin/konsultasi'));
	}

}
