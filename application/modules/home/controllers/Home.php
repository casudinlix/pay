<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
    //Codeigniter : Write Less Do More
    $this->load->helper('tgl');
    if(!$this->session->userdata('login') == TRUE AND !$this->session->userdata('level')=='Admin')
    {
      $this->session->set_flashdata('error','value');
            redirect('login');
      }



  }

  function index()
  {
$data['com']=$this->db->get('company')->row();
$data['jumlah']=$this->db->get('employe')->num_rows();
$data['cuti']=$this->db->get_where('cuti',array('status'=>'PENDING','status !='=>'REJECT'))->num_rows();
$data['kasbon']=$this->db->get_where('kasbon_view',array('status'=>'PENDING','status !='=>'REJECT'))->num_rows();
$this->load->view('atas', $data);
$this->load->view('home', $data);
$this->load->view('bawah', $data);

  }

  function out (){
  $semua=$this->session->all_userdata(array('login','nama','level'));
$this->session->unset_userdata($semua);
    $this->session->sess_destroy($semua);

    redirect('login');
  }
  function employe($offset = 0){
    $this->load->model('m_list');
    $data['com']=$this->db->get('company')->row();
    $data['all']=$this->db->get('join_user')->result();
    $data['jumlah']=$this->db->get('join_user')->num_rows();

    $jml = $this->db->get('join_user');
		$search= $this->input->post('search');
		$config['base_url'] = site_url().'/home/employe/';
		$config['total_rows']  = $jml->num_rows();
		$config['per_page']    = 8;/*Jumlah data yang dipanggil perhalaman*/
		$config['uri_segment'] = 3;/*data selanjutnya di parse diurisegmen 3*/
		//Zend_Barcode::render('code128', 'image', array('text' => '1233'), array());
		//require_once ('./application/libraries/Zend/Barcode.php');
		//adjust the above path to the correct location
		/*Class bootstrap pagination yang digunakan*/
		$config['full_tag_open']    = "<div class='pagination pagination-right'>";
		$config['full_tag_close']   = "</ul>";
		$config['num_tag_open']     = '<li>';
		$config['num_tag_close']    = '</li>';
		$config['cur_tag_open']     = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close']    = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open']    = "<li>";
		$config['next_tagl_close']  = "</li>";
		$config['prev_tag_open']    = "<li>";
		$config['prev_tagl_close']  = "</li>";
		$config['first_tag_open']   = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open']    = "<li>";
		$config['last_tagl_close']  = "</li>";
		$this->pagination->initialize($config);
		$data['halaman'] = $this->pagination->create_links();
		/*membuat variable halaman untuk dipanggil di view nantinya*/
		$data['offset'] = $offset;
		$data['data'] = $this->m_list->paging($config['per_page'], $search, $offset);
		//	$data= $this->model_item_list->view($pencarian,$offset,$data);
		$this->load->model('m_list');
		//$this->model_item_list->produk()->row_array();

    $this->load->view('atas', $data);
    $this->load->view('employe/employe', $data);
    $this->load->view('bawah', $data);
  }
function addemploye(){
  $this->load->model('m_list');
  $data['nip']=$this->m_list->nip();
  $data['com']=$this->db->get('company')->row();
  $data['agama']=$this->db->enum('employe','religion');
  $data['bank']=$this->db->enum('employe', 'bank');
  $data['pendidikan']=$this->db->enum('employe', 'education');
  $data['nikah']=$this->db->enum('employe', 'merried_status');
  $data['status']=$this->db->enum('employe', 'status');
  $data['golongan']=$this->db->enum('employe', 'golongan');
  $data['id']=$this->db->enum('employe', 'type_id');
  $data['type']=$this->db->enum('employe', 'type_employe');
  $data['sex']=$this->db->enum('employe', 'sex');
  $data['job']=$this->db->enum('employe', 'jabatan');
$data['level']=$this->db->enum('users', 'level');
  $this->load->view('atas',$data);
  $this->load->view('employe/add',$data);
  $this->load->view('bawah',$data);
}
function photo(){
$data['com']=$this->db->get('company')->row();
$id=$this->uri->segment(3);
$data['user']=$this->db->get_where('employe',array('nip'=>$id))->row();
$this->load->view('atas',$data);
$this->load->view('employe/photo',$data);
$this->load->view('bawah',$data);

}
function uploadphoto(){
    //$config['upload_path']   = FCPATH.'/uploads/';
    $id=$this->uri->segment(3);
      $config['upload_path']     = './upload/employe';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        if($this->upload->do_upload('userfile')){
                  $nama=$this->upload->data('file_name');
                  $token=$this->input->post('token');
                  $poto=$token.$nama;
                  $this->db->where('nip', $token);
                  $this->db->update('employe', array('photo'=>$nama));
                  echo "Ok";
                	//$this->db->insert('employe',array('photo'=>$nama,'token'=>$token));
                }else{
                  echo $this->upload->display_errors();
                }

}
function remove_foto(){
  //Ambil token foto
		$token=$this->input->post('token');


		$foto=$this->db->get_where('employe',array('nip'=>$token));


		if($foto->num_rows()>0){
			$hasil=$foto->row();
			$nama_foto=$hasil->photo;
			if(file_exists($file=FCPATH.'/upload/employe/'.$nama_foto)){
				unlink($file);
			}
      $this->db->where('nip', $token);
			$this->db->update('employe',array('photo'=>'no.png'));
      echo "OK";


		}


		echo "{}";
	}
function deletpoto($d){
  $id=$this->uri->segment(3);
  $foto=$this->db->get_where('employe',array('nip'=>$id));


    $this->db->where('nip', $id);
    $this->db->update('employe',array('photo'=>'no.png'));
    echo "OK";
}
function editemploye(){
  $data['com']=$this->db->get('company')->row();
  $id=$this->uri->segment(3);
  $data['user']=$this->db->get_where('join_user',array('nip'=>$id))->row();
  $data['profil']=$this->db->get_where('employe',array('nip'=>$id))->row();
  $data['pass']=$this->db->get_where('users',array('nip'=>$id))->row();
  $data['agama']=$this->db->enum('employe','religion');
  $data['bank']=$this->db->enum('employe', 'bank');
  $data['pendidikan']=$this->db->enum('employe', 'education');
  $data['id']=$this->db->enum('employe', 'type_id');
  $data['nikah']=$this->db->enum('employe', 'merried_status');
  $data['status']=$this->db->enum('employe', 'status');
  $data['golongan']=$this->db->enum('employe', 'golongan');
  $data['type']=$this->db->enum('employe', 'type_employe');
  $data['sex']=$this->db->enum('employe', 'sex');
  $data['job']=$this->db->enum('employe', 'jabatan');
$data['level']=$this->db->enum('users', 'level');
  $this->load->view('atas',$data);
  $this->load->view('employe/editemploye',$data);
  $this->load->view('bawah',$data);

}
function schedule(){

}
function company(){
  $id=$this->uri->segment(3);
  $data['com']=$this->db->get('company')->row();
  $this->load->view('atas',$data);
  $this->load->view('company/company',$data);
  $this->load->view('bawah',$data);
}
function settingsift(){
  $data['com']=$this->db->get('company')->row();
  $data['all']=$this->db->get('shift')->result();
  $this->load->view('atas',$data);
  $this->load->view('sift/sift',$data);
  $this->load->view('bawah',$data);
}
function addshift(){
  $data['com']=$this->db->get('company')->row();

  $this->load->view('atas',$data);
  $this->load->view('sift/addsift',$data);
  $this->load->view('bawah',$data);
}
function createschedule(){
  $data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get('join_user')->result();

  $this->load->view('atas',$data);
  $this->load->view('schedule/schedule',$data);
  $this->load->view('bawah',$data);

}
function setschedule(){
  $id=$this->uri->segment(3);
  $data['com']=$this->db->get('company')->row();
  $data['user']=$this->db->get_where('join_user', array('nip'=>$id))->row();
$data['jadwal']=$this->db->get_where('jadwal_view',array('nip'=>$id))->result();

$data['shift']=$this->db->get('shift')->result();
$data['shift1']=$this->db->get('shift')->row();
  $this->load->view('atas',$data);
  $this->load->view('schedule/setschedule',$data);
  $this->load->view('bawah',$data);
}
function set(){
  $keyword=$this->uri->segment(3);
    //$this->db->select('sift_name, jam_in,jam_out');
     //$this->db->like();
     		$data =$this->db->get('shift');
        foreach($data->result() as $row)
    		{
    			$arr['query'] = $keyword;
    			$arr['suggestions'][] = array(
    				'value'	=>$row->sift_name,
    				'jam_in'	=>$row->jam_in,
    				'jam_out'	=>$row->jam_out

    			);
    		}
    		// minimal PHP 5.2
    		echo json_encode($arr);


}
function deletjadwal($d){
  $id=$this->uri->segment(3);
  $tgl=$this->uri->segment(4);
  $this->db->where('id', $id);

$this->db->delete('schedule');
    echo "OK";
}
function deletshift(){
  $id=$this->uri->segment(3);
  $this->db->where('id', $id);
  $this->db->delete('shift');
  redirect($_SERVER['HTTP_REFERER']);

}
function attendance(){
  $data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get('absensi_new')->result();
$data['status']=$this->db->enum('absensi','status');

  $this->load->view('atas',$data);
  $this->load->view('absensi/absensi',$data);
  $this->load->view('bawah',$data);
}
function salary(){
$data['com']=$this->db->get('company')->row();
$data['gaji']=$this->db->get('m_gaji')->result();
  $this->load->view('atas',$data);
  $this->load->view('salary/salary',$data);
  $this->load->view('bawah',$data);
}
function addsalary(){
$data['com']=$this->db->get('company')->row();
$data['jabatan']=$this->db->enum('employe', 'jabatan');
$data['gol']=$this->db->enum('insentif', 'golongan');

$this->load->view('atas',$data);
$this->load->view('salary/addsalary',$data);
$this->load->view('bawah',$data);
}
function editsalary(){
  $id=$this->uri->segment(3);
  $data['com']=$this->db->get('company')->row();
$data['sal']=$this->db->get_where('m_gaji',array('id'=>$id))->row();
$data['jabatan']=$this->db->enum('employe', 'jabatan');
$data['gol']=$this->db->enum('insentif', 'golongan');
  $this->load->view('atas',$data);
  $this->load->view('salary/editsalary',$data);
  $this->load->view('bawah',$data);
}
function insentif(){
  $data['com']=$this->db->get('company')->row();
  $data['intensif']=$this->db->get('insentif')->result();
    $this->load->view('atas',$data);
    $this->load->view('insentif/insentif',$data);
    $this->load->view('bawah',$data);
}
function addinsentif(){
  $data['com']=$this->db->get('company')->row();
  $data['intensif']=$this->db->get('insentif')->result();
  $data['gol']=$this->db->enum('insentif','golongan' );
  $data['jabatan']=$this->db->enum('employe','jabatan' );
    $this->load->view('atas',$data);
    $this->load->view('insentif/add',$data);
    $this->load->view('bawah',$data);
}
function editinsentif(){
  $id=$this->uri->segment(3);
  $data['com']=$this->db->get('company')->row();
  $data['in']=$this->db->get_where('insentif',array('id'=>$id))->row();
  $data['gol']=$this->db->enum('insentif','golongan' );
  $data['jabatan']=$this->db->enum('employe','jabatan' );
    $this->load->view('atas',$data);
    $this->load->view('insentif/edit',$data);
    $this->load->view('bawah',$data);
}
function absen(){
  $id=$this->uri->segment(3);
  $this->load->model('m_list');

  $data['com']=$this->db->get('company')->row();
  $data['jadwal']= $this->db->get_where('schedule',array('nip'=>$id))->result();
  $data['absen']=$this->db->get_where('absensi',array('nip'=>$id))->result();

  $this->load->view('atas',$data);
  $this->load->view('absen/absen',$data);
  $this->load->view('bawah',$data);
}
function myschedule(){
  $id=$this->uri->segment(3);

  $data['com']=$this->db->get('company')->row();
  $data['jadwal']= $this->db->get_where('schedule',array('nip'=>$id))->result();

  $this->load->view('atas',$data);
  $this->load->view('schedule/myschedule',$data);
  $this->load->view('bawah',$data);
}
function listleave(){

  $data['com']=$this->db->get('company')->row();
  $data['cuti']=$this->db->get('cuti_view')->result();
  $this->load->view('atas',$data);
  $this->load->view('cuti/cuti',$data);
  $this->load->view('bawah',$data);
}
function addleave(){
  $this->load->model('m_list');
  $data['kode']=$this->m_list->cuti();
  $data['com']=$this->db->get('company')->row();
  $this->load->view('atas',$data);
  $this->load->view('cuti/add',$data);
  $this->load->view('bawah',$data);

}
function editleave(){
  $id=$this->uri->segment(3);
  $id1=$this->uri->segment(4);
  $data['com']=$this->db->get('company')->row();
  $data['u']=$this->db->get_where('m_cuti',array('id_cuti'=>$id))->row();
  $data['cuti']=$this->db->get_where('cuti_view',array('id_cuti'=>$id))->row();
  $this->load->view('atas',$data);
  $this->load->view('cuti/edit',$data);
  $this->load->view('bawah',$data);
}
function leave(){
  $id=$this->uri->segment(3);

  $data['com']=$this->db->get('company')->row();
$data['cuti']=$this->db->get_where('cuti_view',array('nip'=>$id,'sisa >'=>'0'))->result();
$data['cek']=$this->db->get_where('cuti_pengajuan_view',array('nip'=>$id));
  $this->load->view('atas',$data);
  $this->load->view('cuti/leave',$data);
  $this->load->view('bawah',$data);
}
function approvecuti(){
  $data['com']=$this->db->get('company')->row();
  $data['cek']=$this->db->get('cuti_pengajuan_view')->result();
$data['status']=$this->db->enum('cuti_pengajuan_view','status');

  $this->load->view('atas',$data);
  $this->load->view('approve/listcuti',$data);
  $this->load->view('bawah',$data);
}
function hitung(){
    $data['com']=$this->db->get('company')->row();

}
function kasbon(){
  $id=$this->session->userdata('nip');

  $this->db->select_sum('nominal');
  $data['sum']=$this->db->get_where('kasbon_view',array('nip'=>$id,'status'=>"APPROVE",'status_byr'=>"BELUM BAYAR"))->row();
   $data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get_where('kasbon_view',array('nip'=>$id))->result();
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
function listkasbon(){
  $data['com']=$this->db->get('company')->row();
  $this->db->select_sum('nominal');
  $data['sum']=$this->db->get('kasbon_view')->row();
  $data['all']=$this->db->get('kasbon_view')->result();
    $this->load->view('atas',$data);
    $this->load->view('approve/kasbon',$data);
    $this->load->view('bawah',$data);
}
}
