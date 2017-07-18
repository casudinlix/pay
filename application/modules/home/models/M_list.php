<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_list extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function paging($offset, $search, $num){
    if ($search) {
			$query = $this->db->or_like(array('nip' => $search, 'nama_lengkap' => $search));
		}
		$query = $this->db->count_all_results('karyawan_view');
		if ($search) {
			$query = $this->db->or_like(array('nip' => $search, 'nama_lengkap' =>$search));
		}
		$query = $this->db->get('karyawan_view', $offset, $num);
		return $query->result();

  }
function nip(){
  $h=date('d');
  $b=date('m');
  $y=date('y');
  $create = strtoupper(uniqid(rand(),true));
  //$s='SB.';

  $style = substr($y.$b.$h.$create,0,9);
  return $style;
}
function no(){
  $h=date('d');
  $b=date('m');
  $y=date('Y');
  $this->db->select('RIGHT(pinjaman.no_transaksi,2) as kode', FALSE);
  $this->db->order_by('no_transaksi','DESC');    
  $this->db->limit(1);     
  $query = $this->db->get('pinjaman');      //cek dulu apakah ada sudah ada kode di tabel.    
  if($query->num_rows() <> 0){       
   //jika kode ternyata sudah ada.      
   $data = $query->row();      
   $kode = intval($data->kode) + 1;     
  }
  else{       
   //jika kode belum ada      
   $kode = 1;     
  }
  $kodemax = str_pad($kode, 5, "-000", STR_PAD_LEFT);    
  $kodejadi = "PJ.".$y.$b.$h.$kodemax;     
  return $kodejadi;   
}
function cuti(){
  $h=date('d');
  $b=date('m');
  $y=date('Y');
  
 $this->db->select('RIGHT(jatah_cuti.id_jc,2) as kode', FALSE);
  $this->db->order_by('id_jc','DESC');    
  $this->db->limit(1);     
  $query = $this->db->get('jatah_cuti');      //cek dulu apakah ada sudah ada kode di tabel.    
  if($query->num_rows() <> 0){       
   //jika kode ternyata sudah ada.      
   $data = $query->row();      
   $kode = intval($data->kode) + 1;     
  }
  else{       
   //jika kode belum ada      
   $kode = 1;     
  }
  $kodemax = str_pad($kode, 5, "-000", STR_PAD_LEFT);    
  $kodejadi = "JC.".$y.$b.$h.$kodemax;     
  return $kodejadi;  
}
function idgaji(){
  $y=date('Y');
  $b=date("m");
  $t=date('d');
 $this->db->select('RIGHT(gaji2.id_gaji,2) as kode', FALSE);
  $this->db->order_by('id_gaji','DESC');    
  $this->db->limit(1);     
  $query = $this->db->get('gaji2');      //cek dulu apakah ada sudah ada kode di tabel.    
  if($query->num_rows() <> 0){       
   //jika kode ternyata sudah ada.      
   $data = $query->row();      
   $kode = intval($data->kode) + 1;     
  }
  else{       
   //jika kode belum ada      
   $kode = 1;     
  }
  $kodemax = str_pad($kode, 4, "-00", STR_PAD_LEFT);    
  $kodejadi = "GJ.".$y.$b.$t.$kodemax;     
  return $kodejadi;  
}
function jabatan(){
 $this->db->select('RIGHT(jabatan.id_jabatan,2) as kode', FALSE);
  $this->db->order_by('id_jabatan','DESC');    
  $this->db->limit(1);     
  $query = $this->db->get('jabatan');      //cek dulu apakah ada sudah ada kode di tabel.    
  if($query->num_rows() <> 0){       
   //jika kode ternyata sudah ada.      
   $data = $query->row();      
   $kode = intval($data->kode) + 1;     
  }
  else{       
   //jika kode belum ada      
   $kode = 1;     
  }
  $kodemax = str_pad($kode, 3, "00", STR_PAD_LEFT);    
  $kodejadi = "JBT-".$kodemax;     
  return $kodejadi;  
}
function potongan(){
 $this->db->select('RIGHT(potongan.id_potongan,2) as kode', FALSE);
  $this->db->order_by('id_potongan','DESC');    
  $this->db->limit(1);     
  $query = $this->db->get('potongan');      //cek dulu apakah ada sudah ada kode di tabel.    
  if($query->num_rows() <> 0){       
   //jika kode ternyata sudah ada.      
   $data = $query->row();      
   $kode = intval($data->kode) + 1;     
  }
  else{       
   //jika kode belum ada      
   $kode = 1;     
  }
  $kodemax = str_pad($kode, 3, "00", STR_PAD_LEFT);    
  $kodejadi = "POT-".$kodemax;     
  return $kodejadi;
}
function insentif(){
  $this->db->select('max(insentif.id) as kode', FALSE);
       $query = $this->db->get('insentif');      //cek dulu apakah ada sudah ada kode di tabel.    
  if($query->num_rows() <> 0){       
   //jika kode ternyata sudah ada.      
   $data = $query->row();      
   $kode = intval($data->kode) +1;     
  }
  else{       
   //jika kode belum ada      
   $kode = 1;     
  }
  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
  $kodejadi = "INS-".$kodemax;     
  return $kodejadi;    
}
function gapok(){
  $this->db->select('max(m_gaji.id) as kode', FALSE);
       $query = $this->db->get('m_gaji');      //cek dulu apakah ada sudah ada kode di tabel.    
  if($query->num_rows() <> 0){       
   //jika kode ternyata sudah ada.      
   $data = $query->row();      
   $kode = intval($data->kode) +1;     
  }
  else{       
   //jika kode belum ada      
   $kode = 1;     
  }
  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
  $kodejadi = "GP-".$kodemax;     
  return $kodejadi;    
}
}