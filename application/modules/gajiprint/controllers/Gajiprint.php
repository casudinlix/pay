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
		$array=array('id_gaji'=>$id,'nip'=>$nip);
		$pin=$this->db->get_where('pinjaman_view1',$array)->num_rows();
if ($pin==false) {
	 
	$data['informasi']=$this->db->get_where('all_gaji_view', $array)->row();
		$data['absensi']=$this->db->get_where('gaji_absensi',$array)->row();
		 
		$data['pinjaman']=$this->db->get_where('pinjaman_view1',$array)->row();
		$data['user']=$this->db->get_where('gaji2',$array)->row();

		$data['totinsentif']=$this->db->get_where('gaji_insentif_view', $array)->result();

		$data['totpotongan']=$this->db->get_where('gaji_potongan_view', $array)->result();
	$this->load->view('print', $data);

}else{
		$data['informasi']=$this->db->get_where('all_gaji_view', $array)->row();
		$data['absensi']=$this->db->get_where('gaji_absensi',$array)->row();
		 
		$data['pinjaman']=$this->db->get_where('pinjaman_view1',$array)->row();
		$data['user']=$this->db->get_where('gaji2',$array)->row();

		$data['totinsentif']=$this->db->get_where('gaji_insentif_view', $array)->result();

		$data['totpotongan']=$this->db->get_where('gaji_potongan_view', $array)->result();

		$this->load->view('print1', $data);
}
}

}

/* End of file Print.php */
/* Location: ./application/controllers/gajiprint.php */