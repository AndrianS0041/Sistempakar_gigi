<?php



/**
 *
 */
class User_model extends CI_Model
{

  function __construct()
  {
    $this->load->database();
  }

  //------------------Login user----------------------------------------------------------
  public function get_user($data)
  {
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->where('email = ', $data['email']);
    $this->db->where('password = ', $data['password']);
    $query = $this->db->get();
    return $query;
  }

  //------------------Daftar----------------------------------------------------------
  public function insert_user($data)
  {
    $this->db->set('nama', $data['nama']);
    $this->db->set('hp', $data['hp']);
    $this->db->set('alamat', $data['alamat']);
    $this->db->set('email', $data['email']);
    $this->db->set('password', $data['password']);
    $this->db->insert('tb_user');
    return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
  }

  public function get_userid()
  {
    $this->db->select('id_user');
    $this->db->from('tb_user');
    $this->db->where('id_user = ');
    $query = $this->db->get();
    return $query;
  }

  public function daftar_penyakit()
  {
    return $this->db->get('tb_penyakit')->result();
  }

  public function get_IdPenyakit($nama_penyakit)
  {
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $this->db->where('nama_penyakit = ', $nama_penyakit);
    $query = $this->db->get();
    return $query;
  }

  public function get_NamaPenyakit($id_penyakit)
  {
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $this->db->where('id_penyakit = ', $id_penyakit);
    $query = $this->db->get();
    return $query;
  }

  public function daftar_pertanyaan()
  {
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $query = $this->db->get();
    return $query;
  }

  public function get_penyakit()
  {
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $query = $this->db->get();
    return $query;
  }

  public function get_rule()
  {
    $this->db->select('*');
    $this->db->from('tb_rule');
    $query = $this->db->get();
    return $query;
  }

  public function tambah_riwayat($data)
  {
    $this->db->set('jawaban', $data['hasil']);
    $this->db->set('waktu', $data['waktu']);
    // $this->db->set('id_user', $data['id_user']);
    $this->db->insert('riwayat_jawaban');
  }

  public function get_riwayat($data)
  {
    $this->db->select('*');
    $this->db->from('riwayat_jawaban');
    $this->db->where('waktu = ', $data);
    $query = $this->db->get();
    return $query;
  }

  public function get_riwayatid($data)
  {
    $this->db->select('*');
    $this->db->from('riwayat_jawaban');
    $this->db->where('id_jawaban = ', $data);
    $query = $this->db->get();
    return $query;
  }

  public function getAll_gejala()
  {
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $query = $this->db->get();
    return $query;
  }
  public function getAll_penyakit()
  {
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $query = $this->db->get();
    return $query;
  }
  public function getAll_rule()
  {
    $this->db->select('*');
    $this->db->from('tb_rule');
    $query = $this->db->get();
    return $query;
  }
}
