<?php
class Login extends CI_Controller
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

  public function index()
  {

    if ($this->session->userdata('status') == "login_user") {
      redirect(base_url('user/home'));
    }

    $this->load->view('pages/user/login');
  }

  public function proses_login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $data = array(
      'email' => $email,
      'password' => $password
    );

    $cek = $this->User_model->get_user($data)->num_rows();
    $nama = $this->User_model->get_user($data)->result();
    if ($cek > 0) {
      $data_session = array(
        'email' => $email,

        'status' => "login_user"
      );
      $this->session->set_userdata($data_session);
      redirect(base_url('user/home'));
    } else {
      $data['login'] = "salah";
      $this->load->view('pages/user/login', $data);
    }
  }

  public function proses_logout()
  {
    $this->session->sess_destroy();
    redirect(base_url('user/login'));
  }
}
