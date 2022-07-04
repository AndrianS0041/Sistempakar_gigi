<?php


/**
 *
 */
class Pasien extends CI_Controller
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

    $data['pasien'] = $this->Admin_model->getAll_user()->result();

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/daftar_pasien',$data);
		$this->load->view('pages/admin/footer');
	}

  public function tambah(){

		if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}
    $dariDB = $this->Admin_model->cekkodepasien();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 2, 3);
        $kodePasienSekarang = $nourut + 1;
        $data = array('kode_pasien' => $kodePasienSekarang);

    $this->load->view('pages/admin/header');
		$this->load->view('pages/admin/tambah_pasien', $data);
		$this->load->view('pages/admin/footer');
	}

  public function proses_tambah(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

    $kodepasien = $this->input->post('kodepasien');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
    $hp = $this->input->post('hp');
    $alamat = $this->input->post('alamat');
    $password = $this->input->post('password');

	$data = array(
      'kode_pasien' => $kodepasien,
      'nama' => $nama,
    	'email' => $email,
      'hp' => $hp,
    	'alamat' => $alamat
    );

		
	$this->Admin_model->insert_pasien($data);
    redirect(base_url('admin/pasien'));
}

// public function edit(){

//     if($this->session->userdata('status') != "login"){
// 			redirect(base_url('admin/login'));
// 		}

// 		$id_user = $this->uri->segment(4);

//     $where = array('id_gejala' => $id_user, );

// 		$data['pasien'] = $this->Admin_model->get_gejala($where)->result();

// 		$this->load->view('pages/admin/header');
// 		$this->load->view('pages/admin/edit_pasien',$data);
// 		$this->load->view('pages/admin/footer');
// 	}

//   public function proses_edit(){

//     if($this->session->userdata('status') != "login"){
// 			redirect(base_url('admin/login'));
// 		}

//     $id_user = $this->input->post('id_gejala');
//     $gejala = $this->input->post('gejala');

// 		$data = array(
// 			'gejala' => $gejala
//     );

// 		$cek_kode = $this->Admin_model->cek_kode_gejala($kode_gejala)->num_rows();
// 		if ($cek_kode == 0) {
// 		  $this->Admin_model->update_gejala($data,$id_gejala);
//       redirect(base_url('admin/gejala'));
// 		}
// 		else {
// 			if ($kode_gejala == $now_kode_gejala) {
//         $this->Admin_model->update_gejala($data,$id_gejala);
//         redirect(base_url('admin/gejala'));
//       }else {
//         $data['cek_kode'] = "ada";
//         $where = array('id_gejala' => $id_gejala );

//     		$data['gejala'] = $this->Admin_model->get_gejala($where)->result();
//   			$this->load->view('pages/admin/header');
//   			$this->load->view('pages/admin/edit_gejala',$data);
//   			$this->load->view('pages/admin/footer');
//       }
// 		}
//   }

  public function hapus(){

    if($this->session->userdata('status') != "login"){
			redirect(base_url('admin/login'));
		}

		$id_user = $this->uri->segment(4);

		$this->Admin_model->delete_user($id_user);

		redirect(base_url('admin/pasien'));
	}

}
