<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='ADMIN')
    {
      redirect('home');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='HRD') {
      redirect('hrd');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='ACCOUNTING') {
      redirect('accounting');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='KARYAWAN') {
      redirect('employe');
    }



  }

  function index()
  {

    $data['com']=$this->db->get('company')->row();
    $this->load->view('login',$data);

  }
function cek(){

if (empty($_POST)) {
  $this->session->set_flashdata('error','value');
  redirect('login');
}else{
$nip=$this->input->post('nip',TRUE);
$pass=base64_encode($this->input->post('pass',TRUE));
$this->load->model('m_login');
	$cek = $this->m_login->chek($nip, $pass);
  if($cek->num_rows() == 1)
  {
    foreach($cek->result() as $data){
      $sess_data['login'] =TRUE;
      $sess_data['nip'] = $data->nip;
      $sess_data['nama'] = $data->nama_lengkap;
      $sess_data['level'] =  $data->hak_akses;
      $this->session->set_userdata($sess_data);

    }
    if($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='ADMIN')
    {
      redirect('home');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='HRD') {
      redirect('hrd');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='ACCOUNTING') {
      redirect('accounting');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='KARYAWAN') {
      redirect('employe');
    }

      }
$this->session->set_flashdata('gagal', 'value');
    redirect('login');

}

}
function keluar(){
  $semua=$this->session->all_userdata(array('login','nip','nama','level'));
$this->session->unset_userdata($semua);
    $this->session->sess_destroy($semua);

    redirect('login');
}

}
