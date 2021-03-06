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
  $y=date('y');
  $create = strtoupper(uniqid(rand(),true));
  $s='KS.';

  $style = substr($s.$y.$b.$h."-".$create,0,13);
  return $style;
}
function cuti(){
  $h=date('d');
  $b=date('m');
  $y=date('y');
  $create = strtoupper(uniqid(rand(),true));
  $s='JC';

  $style = substr($s.$y.$b.$h."-".$create,0,11);
  return $style;
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
  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
  $kodejadi = "GJ-".$y.$b.$t.$kodemax;     
  return $kodejadi;  
}
function jabatan(){
  $h=date('d');
  $b=date('m');
  $y=date('y');
  $create = strtoupper(uniqid(rand(),true));
  $s='JBT';

  $style = substr($s."0"."-".$create,0,7);
  return $style;
}
function potongan(){
 $h=date('d');
  $b=date('m');
  $y=date('y');
  $create = strtoupper(uniqid(rand(),true));
  $s='PT';

  $style = substr($s."0"."-".$create,0,5);
  return $style; 
}
function insentif(){
  $h=date('d');
  $b=date('m');
  $y=date('y');
  $create = strtoupper(uniqid(rand(),true));
  $s='INS';

  $style = substr($s."0"."-".$create,0,7);
  return $style;
}
}