<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_all()
  {
    return $this->db->get('tm_mahasiswa')->result();
  }

  public function insert($data)
  {
    $this->db->insert('tm_mahasiswa', $data);
  }

}