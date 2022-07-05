<?php


/**
 *
 */
class Gejala extends CI_Controller
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

    $data['gejala'] = $this->Admin_model->getAll_gejala()->result();

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/daftar_gejala',$data);
		$this->load->view('pages/admin/footer');
	}

  public function tambah(){

		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}
		$dariDB = $this->Admin_model->cekkodegejala();
        // contoh JRD0004, angka 2 adalah awal pengambilan angka, dan 3 jumlah angka yang diambil
        $nourut = substr($dariDB, 1, 1);
        $kodeGejalaSekarang = $nourut + 1;
        $data = array('kode_gejala' => $kodeGejalaSekarang);


    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/tambah_gejala',$data);
		$this->load->view('pages/admin/footer');
	}

public function proses_tambah(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $kode_gejala = $this->input->post('kode_gejala');
    $gejala = $this->input->post('gejala');

	$data = array(
    	'kode_gejala' => $kode_gejala,
		'gejala' => $gejala
    );

	
	$this->Admin_model->insert_gejala($data);
    redirect(base_url('admin/gejala'));
		
}

public function edit(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_gejala = $this->uri->segment(4);

    $where = array('id_gejala' => $id_gejala, );

		$data['gejala'] = $this->Admin_model->get_gejala($where)->result();

		$this->load->view('pages/admin/header');
		$this->load->view('pages/admin/edit_gejala',$data);
		$this->load->view('pages/admin/footer');
	}

  public function proses_edit(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $id_gejala = $this->input->post('id_gejala');
    
    $kode_gejala = $this->input->post('kode_gejala');
    $gejala = $this->input->post('gejala');

		$data = array(
      'kode_gejala' => $kode_gejala,
			'gejala' => $gejala
    );

		$this->Admin_model->update_gejala($data,$id_gejala);
      redirect(base_url('admin/gejala'));
		
  }

  public function hapus(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_gejala = $this->uri->segment(4);

		$this->Admin_model->delete_gejala($id_gejala);

		redirect(base_url('admin/gejala'));
	}

}
