<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->helper('tgl');
    if($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='KARYAWAN')
    {
      
      }else {
        $this->session->set_flashdata('error','value');
            redirect('login');
      }
  }

  function index()
  {
  $data['com']=$this->db->get('company')->row();
  $data['all']=$this->db->get('karyawan')->result();
  $this->load->view('atas', $data);
  $this->load->view('employe/employe', $data);
  $this->load->view('bawah', $data);
  }
  function absen(){
      $data['com']=$this->db->get('company')->row();
$id=$this->uri->segment(3);
$data['absen']=$this->db->get_where('absensi',array('nip'=>$id))->result();

    $this->load->view('atas', $data);
  $this->load->view('absensi/absen', $data);
  $this->load->view('bawah', $data);
  

  }
  function leave(){
    $id=$this->uri->segment(3);

  $data['com']=$this->db->get('company')->row();
$data['cuti']=$this->db->get_where('jatah_cuti',array('nip'=>$id))->row();
$data['cek']=$this->db->get_where('aju_cuti_view',array('nip'=>$id))->result();
   $this->load->view('atas', $data);
  $this->load->view('cuti/cuti', $data);
  $this->load->view('bawah', $data);
  
  }
  function ajucuti(){
    $id=$this->uri->segment(3);
    $data['com']=$this->db->get('company')->row();
    $data['sisa']=$this->db->get_where('jatah_cuti',array('nip'=>$id));

    $this->load->view('atas',$data);
  $this->load->view('cuti/aju',$data);
  $this->load->view('bawah',$data);
  }
function out (){
  $semua=$this->session->all_userdata(array('login','nip','nama','level'));
$this->session->unset_userdata($semua);
  $this->session->sess_destroy();
      session_destroy();
    redirect('login');
   $this->session->userdata($semua);
}
  function kasbon(){
    $id=$this->session->userdata('nip');

  $this->db->select_sum('nominal_pinjaman');
  $data['sum']=$this->db->get_where('pinjaman_view',array('nip'=>$id,'status_aju'=>"APPROVE",'status_pinjaman'=>"BELUM BAYAR"))->row();
   $data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get_where('pinjaman_view',array('nip'=>$id))->result();
  $this->load->view('atas',$data);
  $this->load->view('kasbon/kasbon',$data);
  $this->load->view('bawah',$data);
  }
  function addkasbon(){
      $id=$this->uri->segment(3);
  $data['com']=$this->db->get('company')->row();
$this->load->model('m_list');
$data['tr']=$this->m_list->no();
$this->load->view('atas',$data);
$this->load->view('kasbon/tambah',$data);
$this->load->view('bawah',$data);
  }
  function slipgaji(){
    $data['com']=$this->db->get('company')->row();

    $data['gaji']=$this->db->get('all_view_1')->result();
    $this->load->model('m_list');
$data['idgaji']=$this->m_list->idgaji();
     $this->load->view('atas',$data);
  $this->load->view('slip/slipgaji',$data);
  $this->load->view('bawah',$data);

  }
}
