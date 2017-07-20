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
 		 
		$pinjaman=$this->db->select_sum('nominal_pinjaman');
		$data['pinjaman']=$this->db->get_where('pinjaman_view1',$array)->result();
		$this->db->get_where('pinjaman_view1',$array)->result();
		$data['user']=$this->db->get_where('gaji2',$array)->row();

		$data['totinsentif']=$this->db->get_where('gaji_insentif_view', $array)->result();

		$data['totpotongan']=$this->db->get_where('gaji_potongan_view', $array)->result();
		//hitung absensi
		$ambil=$this->db->get_where('all_gaji_view', $array)->result();
		foreach ($ambil as $key) {
			$bulan=$key->bulan_gaji;
		}

	 
	 

$data['hadir']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'HADIR','bulan_absensi'=>$bulan))->num_rows();
	$data['cuti']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'CUTI','bulan_absensi'=>$bulan))->num_rows();
	$data['ijin']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'IZIN','bulan_absensi'=>$bulan))->num_rows();
	$data['alpa']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'ALPHA','bulan_absensi'=>$bulan))->num_rows();

	//hitung lembur
	$this->db->select_sum('lembur');

	$data['lembur']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'HADIR','bulan_absensi'=>$bulan))->row_array();
	$this->db->select_sum('telat');

	$data['telat']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'HADIR','bulan_absensi'=>$bulan))->row_array();
	
	
	
	$this->load->view('print', $data);

}else{
		$data['informasi']=$this->db->get_where('all_gaji_view', $array)->row();


		$data['user']=$this->db->get_where('gaji2',$array)->row();

		$data['totinsentif']=$this->db->get_where('gaji_insentif_view', $array)->result();

		$data['totpotongan']=$this->db->get_where('gaji_potongan_view', $array)->result();
		$this->db->select_sum('nominal_pinjaman');
 		 
		$kasbon=$this->db->get_where('pinjaman_view1',$array)->result();
foreach ($kasbon as $key) {
	$data['pinjaman']=$key->nominal_pinjaman;
	
}
		//hitung absensi
		$ambil=$this->db->get_where('all_gaji_view', $array)->result();
		foreach ($ambil as $key) {
			$bulan=$key->bulan_gaji;
		}

	 
	 

$data['hadir']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'HADIR','bulan_absensi'=>$bulan))->num_rows();
	$data['cuti']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'CUTI','bulan_absensi'=>$bulan))->num_rows();
	$data['ijin']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'IZIN','bulan_absensi'=>$bulan))->num_rows();
	$data['alpa']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'ALPHA','bulan_absensi'=>$bulan))->num_rows();

	//hitung lembur
	$this->db->select_sum('lembur');

	$data['lembur']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'HADIR','bulan_absensi'=>$bulan))->row_array();
	$this->db->select_sum('telat');

	$data['telat']=$this->db->get_where('absensi',array('nip'=>$nip,'status' =>'HADIR','bulan_absensi'=>$bulan))->row_array();

		$this->load->view('print1', $data);
}
}

}

/* End of file Print.php */
/* Location: ./application/controllers/gajiprint.php */