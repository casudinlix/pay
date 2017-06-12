<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gajiprint extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}
function print(){
	$id= $this->uri->segment(3);
		$nip= $this->uri->segment(4);
		$data['detviews']=$this->db->get_where('gaji_view',array('id_gaji'=>$id))->result();
		$data['kar']=$this->db->get_where('gaji_detail_view',array('id_gaji'=>$id))->row();
		$data['kar1']=$this->db->get_where('karyawan_view',array('nip'=>$nip))->row();

		$data['all']=$this->db->get_where('gaji_detail_view', array('id_gaji'=>$id,'nip'=>$nip));
		$jml=$this->db->get_where('gaji_detail_view', array('id_gaji'=>$id,'nip'=>$nip));
		foreach ($jml->result() as $key) {
			$data['jm']=$key->jml_insentif;
			$key->nominal_insentif;

		}
		
		$data['bulan']=$this->db->get_where('gaji_detail_view', array('id_gaji'=>$id))->row();


		$data['gaji1']=$this->db->get_where('gaji_view', array('id_gaji'=>$id))->row();

		$data['gaji2']=$this->db->get_where('gaji', array('id_gaji'=>$id))->row();
		$gaji=$this->db->get_where('gaji_detail_view', array('id_gaji'=>$id,'nip'=>$nip));
$total=0;
foreach ($gaji->result() as $value) {
	$total+=$value->nominal_insentif*$value->jml_insentif;
	$data['jml']=$total;

}
		$this->db->select_sum('nominal_insentif');
		$insenti=$this->db->get_where('gaji_detail_view', array('id_gaji'=>$id,'nip'=>$nip))->row();
foreach ($insenti as $key) {

	$data['nominal']=$key;
}

		$this->db->select_sum('jml_insentif');
		$ban=$this->db->get_where('gaji_detail_view', array('id_gaji'=>$id,'nip'=>$nip))->row();

		foreach ($ban as $key) {
			$data['banyak']=$key;
			
		}

		$this->load->view('print', $data);
}
}

/* End of file Print.php */
/* Location: ./application/controllers/gajiprint.php */