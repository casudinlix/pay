<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if(!$this->input->is_ajax_request()){
			exit('No direct script access allowed :)');
		}
  }

  public function index()
  {

  }
  function cek(){
    $keyword=$this->uri->segment(3);
      //$this->db->select('sift_name, jam_in,jam_out');
       //$this->db->like();
       		$data =$this->db->get('karyawan');
          foreach($data->result() as $row)
      		{
      			$arr['query'] = $keyword;
      			$arr['suggestions'][] = array(
      				'value'	=>$row->nama_lengkap,
      				'nip'	=>$row->nip
      				//'jam_out'	=>$row->jam_out

      			);
      		}
      		// minimal PHP 5.2
      		echo json_encode($arr);


  }
function cuti(){
  $nip=$this->uri->segment(3);
  $date=$this->uri->segment(4);
  $w=array('id_cuti'=>$nip,'date'=>$date);
  $this->db->where($w);
  $this->db->delete('cuti');

  echo "OK";
}
function approve(){
  $nip=$this->uri->segment(3);
  $date=$this->uri->segment(4);
  $s=$this->uri->segment(5);
  $id=$this->uri->segment(6);
  $tgl=date('Y-m-d') ;
  $user=$this->session->userdata('nama');
  $w=array('id_cuti'=>$id,'tgl_awal_cuti'=>$date,'nip'=>$nip);

  $data=array('tgl_approve'=>$tgl,'disetujui_oleh'=>$user,'status_cuti'=>'APPROVE');

  if ($s=="REJECT") {
    $this->db->where($w);
    $this->db->update('aju_cuti',$data);
    echo "OK";
  }else{
    $this->db->where($w);
    $this->db->update('aju_cuti',$data);
  
  echo "OK";
}
}
function kasbon(){
  $no=$this->uri->segment(3);
  $this->db->where('no_transaksi', $no);
$this->db->delete('kasbon');
  echo "OK";
}
function approvekasbon(){
  $no=$this->uri->segment(3);
  $st=$this->uri->segment(4);
  $tgl=date("Y-m-d");
  $user=$this->session->userdata('nama');
  $data=array('tgl_approve'=>$tgl,'status_aju'=>$st,'disetujui_oleh'=>$user);

if ($st=="APPROVE") {
  $this->db->where('no_transaksi', $no);
  $this->db->update('kasbon', $data);
  echo "ok approve";
}else{
  $this->db->where('no_transaksi', $no);
  $this->db->update('kasbon', $data);
  echo "ok reject";
}

}
function postingajucuti(){
  $id=$this->uri->segment(3);
  $nip=$this->uri->segment(4);
  $lama=$this->uri->segment(5);
  $status=$this->uri->segment(6);
$cek=$this->db->get_where('jatah_cuti', array('id_jc'=>$id))->result();
foreach ($cek as $key) {
  $sisa=$key->sisa_cuti;
  $terpakai=$key->terpakai;
}
$digunakan=$lama;
$sisacuti=$sisa-$lama;
$data=array('terpakai'=>$digunakan,'sisa_cuti'=>$sisacuti);
$data1=array('status_cuti'=>$status);
  $this->db->where('id_jc',$id);
  $this->db->update('jatah_cuti', $data);

  $this->db->where('id_cuti', $id);
  $this->db->update('aju_cuti', $data1);


}
}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */
