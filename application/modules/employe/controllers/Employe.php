<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
  $data['com']=$this->db->get('company')->row();
  $data['all']=$this->db->get('employe')->result();
  $this->load->view('atas', $data);
  $this->load->view('employe/employe', $data);
  $this->load->view('bawah', $data);
  }

}
