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
       		$data =$this->db->get('users');
          foreach($data->result() as $row)
      		{
      			$arr['query'] = $keyword;
      			$arr['suggestions'][] = array(
      				'value'	=>$row->name,
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
  $w=array('nip'=>$nip,'date'=>$date);
  $this->db->where($w);
  $this->db->delete('cuti');

  echo "OK";
}
function approve(){
  $nip=$this->uri->segment(3);
  $date=$this->uri->segment(4);
  $s=$this->uri->segment(5);
  $tgl=date('Y-m-d') ;
  $w=array('nip'=>$nip,'date'=>$date);
  $absensi=array('nip'=>$nip,'in'=>'00:00:00','out'=>'00:00:00','date'=>$date,'status'=>'CUTI');
  $data=array('status'=>$s,'approve_date'=>$tgl,'approve_by'=>$this->session->userdata('nama'));

  if ($s=="REJECT") {
    $this->db->where($w);
    $this->db->update('cuti',$data);
    echo "OK";
  }else{
    $this->db->where($w);
    $this->db->update('cuti',$data);
  $this->db->where($w);
  $this->db->update('absensi', $absensi);
  echo "OK";
}
}
function kasbon(){
  $no=$this->uri->segment(3);
  $this->db->where('no_transaksi', $no);
$this->db->delete('kasbon');
  echo "OK";
}
}

/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */
