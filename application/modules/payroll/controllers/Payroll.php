<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payroll extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['com']=$this->db->get('company')->row();
    $data['jumlah']=$this->db->get('employe')->num_rows();
    $this->load->view('atas', $data);
    $this->load->view('home', $data);
    $this->load->view('bawah', $data);
  }
  function out (){
  $semua=$this->session->all_userdata(array('login','nama','level'));
  $this->session->unset_userdata($semua);
    $this->session->sess_destroy($semua);

    redirect('login');
  }
}

/* End of file Payroll.php */
/* Location: ./application/controllers/Payroll.php */
