<?php


/**
 *
 */
class Profil extends CI_Controller
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

    if ($this->session->userdata('status') != "login_user") {
      redirect(base_url('user/login'));
    }

    $id_user = $this->uri->segment(4);

    $where = array('id_user' => $id_user,);

    $data['user'] = $this->User_model->get_userid($where)->result();

    $this->load->view('pages/user/header');
    $this->load->view('pages/user/profil', $data);
    $this->load->view('pages/user/footer');
  }

  public function proses_edit()
  {

    if ($this->session->userdata('status') != "login_user") {
      redirect(base_url('user/login'));
    }
    $id_user = $this->input->post('id_user');
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

    $this->User_model->update_user($data, $id_user);
    redirect(base_url('user/profil'));
  }
}
