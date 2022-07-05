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
  public function get_user($data){
    $this->db->select('*');
    $this->db->from('tb_user');
    $this->db->where('email = ',$data['email']);
    $this->db->where('password = ',$data['password']);
    $query = $this->db->get();
    return $query;
  }

  //------------------Daftar----------------------------------------------------------
  public function insert_user($data){
    $this->db->set('nama',$data['nama']);
    $this->db->set('hp',$data['hp']);
    $this->db->set('alamat',$data['alamat']);
    $this->db->set('email',$data['email']);
    $this->db->set('password',$data['password']);
    $this->db->insert('tb_user');
    return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
  }

}
