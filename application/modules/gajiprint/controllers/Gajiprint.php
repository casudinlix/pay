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
		$data['banyak']=$this->db->get_where('gaji_detail_view', array('id_gaji'=>$id,'nip'=>$nip))->num_rows();
		$data['gaji1']=$this->db->get_where('gaji_view', array('id_gaji'=>$id))->row();
		$data['gaji2']=$this->db->get_where('gaji', array('id_gaji'=>$id))->row();
		$this->db->select_sum('nominal_insentif');
		$data['total']=$this->db->get_where('gaji_detail_view', array('id_gaji'=>$id,'nip'=>$nip))->row();

		$this->load->view('print', $data);
}
}

/* End of file Print.php */
/* Location: ./application/controllers/gajiprint.php */