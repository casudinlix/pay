<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {

    parent::__construct();
$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
   $this->load->library('fpdf_gen');
    $this->load->helper('tgl');
    if($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='ADMIN')
    {
      
      }else {
        $this->session->set_flashdata('error','value');
            redirect('login');
      }



  }

  function index()
  {
$data['com']=$this->db->get('company')->row();
$data['jumlah']=$this->db->get('karyawan')->num_rows();
$data['cuti']=$this->db->get_where('aju_cuti',array('status_cuti'=>'POSTING','status_cuti !='=>'REJECT'))->num_rows();
$data['kasbon']=$this->db->get_where('pinjaman',array('status_aju'=>'PENDING','status_aju !='=>'REJECT'))->num_rows();
$data['com']=$this->db->get('company')->row();
  $this->db->select_sum('nominal_pinjaman');
  $this->db->where(array('status_aju'=>'APPROVE','status_pinjaman'=>'BELUM BAYAR'));
  //$this->db->or_where_in('status_pinjaman','BELUM BAYAR');
  $data['sum']=$this->db->get('pinjaman_view')->row();
  $this->db->select_sum('nominal_pinjaman');
  $this->db->where_in('status_pinjaman','LUNAS');
    $data['lunas']=$this->db->get('pinjaman_view')->row();
  $data['all']=$this->db->get('pinjaman_view')->result();
  
$this->load->view('atas', $data);
$this->load->view('home', $data);
$this->load->view('bawah', $data);

  }

  function out (){
  $semua=$this->session->all_userdata(array('login','nip','nama','level'));
$this->session->unset_userdata($semua);
    $this->session->sess_destroy();
      session_destroy();
    redirect('login');
  }
  function employe($offset = 0){
    $this->load->model('m_list');
    $data['com']=$this->db->get('company')->row();
    $data['all']=$this->db->get('karyawan_view')->result();
    $data['jumlah']=$this->db->get('karyawan_view')->num_rows();

    $jml = $this->db->get('karyawan');
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
  $data['agama']=$this->db->enum('karyawan','agama');
  $data['bank']=$this->db->enum('karyawan', 'bank');
  $data['pendidikan']=$this->db->enum('karyawan', 'pendidikan');
    $data['status']=$this->db->enum('karyawan', 'status');
   $data['id']=$this->db->enum('karyawan', 'jenis_id');
   $data['sex']=$this->db->enum('karyawan', 'jk');
  $data['job']=$this->db->get('jabatan')->result();
$data['level']=$this->db->enum('users', 'hak_akses');
  $this->load->view('atas',$data);
  $this->load->view('employe/add',$data);
  $this->load->view('bawah',$data);
}
function photo(){
$data['com']=$this->db->get('company')->row();
$id=$this->uri->segment(3);
$data['user']=$this->db->get_where('karyawan',array('nip'=>$id))->row();
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
                  $this->db->update('karyawan', array('foto'=>$nama));
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
  $data['user']=$this->db->get_where('karyawan_view',array('nip'=>$id))->row();
  $data['user1']=$this->db->get_where('karyawan',array('nip'=>$id))->row();
  $data['profil']=$this->db->get_where('karyawan_view',array('nip'=>$id))->row();
  $data['pass']=$this->db->get_where('users',array('nip'=>$id))->row();
  $data['agama']=$this->db->enum('karyawan_view','agama');
  $data['bank']=$this->db->enum('karyawan_view', 'bank');
  $data['pendidikan']=$this->db->enum('karyawan_view', 'pendidikan');
  $data['id']=$this->db->enum('karyawan_view', 'jenis_id');
  $data['jabatan']=$this->db->get('jabatan')->result();
  $data['status']=$this->db->enum('karyawan_view', 'status');
  
  
  $data['sex']=$this->db->enum('karyawan_view', 'jk');
  
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
$data['all']=$this->db->get('absensi_view')->result();


  $this->load->view('atas',$data);
  $this->load->view('absensi/absensi',$data);
  $this->load->view('bawah',$data);
}
function salary(){
$data['com']=$this->db->get('company')->row();
$data['gaji']=$this->db->get('m_gaji_view')->result();
  $this->load->view('atas',$data);
  $this->load->view('salary/salary',$data);
  $this->load->view('bawah',$data);
}
function addsalary(){
$data['com']=$this->db->get('company')->row();
$data['jabatan']=$this->db->get('jabatan')->result();

$this->load->view('atas',$data);
$this->load->view('salary/addsalary',$data);
$this->load->view('bawah',$data);
}
function editsalary(){
  $id=$this->uri->segment(3);
  $data['com']=$this->db->get('company')->row();
$data['sal']=$this->db->get_where('m_gaji_view',array('id'=>$id))->row();
$data['sal1']=$this->db->get_where('m_gaji',array('id'=>$id))->row();

$data['jabatan']=$this->db->get('jabatan')->result();
 
  $this->load->view('atas',$data);
  $this->load->view('salary/editsalary',$data);
  $this->load->view('bawah',$data);
}
function jabatan(){
  $data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get('jabatan')->result();
  $this->load->view('atas',$data);
  $this->load->view('jabatan/jabatan',$data);
  $this->load->view('bawah',$data);
}
function addjabatan(){
   $data['com']=$this->db->get('company')->row();
$this->load->model('m_list');
$data['code']=$this->m_list->jabatan();
  $this->load->view('atas',$data);
  $this->load->view('jabatan/add',$data);
  $this->load->view('bawah',$data);
}
function editjabatan(){
  $data['com']=$this->db->get('company')->row();
  $id=$this->uri->segment(3);
  $data['jab']=$this->db->get_where('jabatan',array('id_jabatan'=>$id))->row();
  $this->load->view('atas',$data);
  $this->load->view('jabatan/edit',$data);
  $this->load->view('bawah',$data);
}
function user(){
  $data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get('users')->result();
  $this->load->view('atas',$data);
  $this->load->view('user/user',$data);
  $this->load->view('bawah',$data);
}
function adduser(){
  $data['com']=$this->db->get('company')->row();
$this->load->model('m_list');
$data['code']=$this->m_list->nip();
  $this->load->view('atas',$data);
  $this->load->view('user/add',$data);
  $this->load->view('bawah',$data);
}
function edituser(){
  $data['com']=$this->db->get('company')->row();
$id=$this->uri->segment(3);
$data['user']=$this->db->get_where('users', array('nip'=>$id))->row();
  $this->load->view('atas',$data);
  $this->load->view('user/edit',$data);
  $this->load->view('bawah',$data);
}
function insentif(){
  $data['com']=$this->db->get('company')->row();
  $data['intensif']=$this->db->get('insentif_view')->result();
    $this->load->view('atas',$data);
    $this->load->view('insentif/insentif',$data);
    $this->load->view('bawah',$data);
}
function addinsentif(){
  $data['com']=$this->db->get('company')->row();
$this->load->model('m_list');
$data['code']=$this->m_list->insentif();
$data['jabatan']=$this->db->get('jabatan')->result();
    $this->load->view('atas',$data);
    $this->load->view('insentif/add',$data);
    $this->load->view('bawah',$data);
}
function editinsentif(){
  $id=$this->uri->segment(3);
  $data['com']=$this->db->get('company')->row();
  $data['in']=$this->db->get_where('insentif',array('id_insentif'=>$id))->row();
  $data['in1']=$this->db->get_where('insentif_view', array('id_insentif'=>$id))->row();
  $data['jabatan']=$this->db->get('jabatan')->result();
    $this->load->view('atas',$data);
    $this->load->view('insentif/edit',$data);
    $this->load->view('bawah',$data);
}
function absen(){
  $id=$this->uri->segment(3);
  $this->load->model('m_list');

  $data['com']=$this->db->get('company')->row();
  
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
  $data['u']=$this->db->get_where('jatah_cuti',array('id_jc'=>$id))->row();
  $data['cuti']=$this->db->get_where('cuti_view',array('id_jc'=>$id))->row();
  $this->load->view('atas',$data);
  $this->load->view('cuti/edit',$data);
  $this->load->view('bawah',$data);
}
function leave(){
  
  $id=$this->uri->segment(3);

  $data['com']=$this->db->get('company')->row();
$data['cuti']=$this->db->get_where('jatah_cuti',array('nip'=>$id))->row();
$data['cek']=$this->db->get_where('aju_cuti_view',array('nip'=>$id))->result();

  $this->load->view('atas',$data);
  $this->load->view('cuti/leave',$data);
  $this->load->view('bawah',$data);
}
function ajucuti(){
  $id=$this->uri->segment(3);
    $data['com']=$this->db->get('company')->row();
    $data['sisa']=$this->db->get_where('jatah_cuti',array('nip'=>$id));

    $this->load->view('atas',$data);
  $this->load->view('cuti/aju_cuti',$data);
  $this->load->view('bawah',$data);

}
function approvecuti(){
  $data['com']=$this->db->get('company')->row();
  $this->db->where_in('status_cuti','POSTING');
$this->db->or_where_in('status_cuti', 'APPROVE');
$data['cek']=$this->db->get('aju_cuti_view')->result();
  $this->load->view('atas',$data);
  $this->load->view('approve/listcuti',$data);
  $this->load->view('bawah',$data);
}
function hitung(){
    $data['com']=$this->db->get('company')->row();
   
    $this->load->model('m_list');
$data['idgaji']=$this->m_list->idgaji();



     $this->load->view('atas',$data);
  $this->load->view('hitung/hitung1',$data);
  $this->load->view('bawah',$data);

}
function hitunggaji(){
  $id=$this->uri->segment(3);
  $gol=$this->uri->segment(4);
  $idgaji=$this->uri->segment(5);
  $this->load->model('m_list');
  $this->m_list->idgaji();

  $data['idgaji']=$this->m_list->idgaji();
  
  $data['com']=$this->db->get('company')->row();
  $data['insentif']=$this->db->get('insentif')->result();
  
   $data['potongan']=$this->db->get('potongan')->result();
   $data['pinjaman']=
  $this->load->view('atas',$data);
  $this->load->view('hitung/hitunggaji',$data);
  $this->load->view('bawah',$data);
}
function kasbon(){
  $id=$this->session->userdata('nip');

  $this->db->select_sum('nominal_pinjaman');
  $data['sum']=$this->db->get_where('pinjaman_view',array('nip'=>$id,'status_aju'=>"APPROVE",'status_pinjaman'=>"BELUM BAYAR"))->row();
   $data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get_where('pinjaman_view',array('nip'=>$id))->result();
$data['limit']=100000;
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
  $this->db->select_sum('nominal_pinjaman');
  $this->db->where(array('status_aju'=>'APPROVE','status_pinjaman'=>'BELUM BAYAR'));
  //$this->db->or_where_in('status_pinjaman','BELUM BAYAR');
  $data['sum']=$this->db->get('pinjaman_view')->row();
  $this->db->select_sum('nominal_pinjaman');
  $this->db->where_in('status_pinjaman','LUNAS');
    $data['lunas']=$this->db->get('pinjaman_view')->row();
  $data['all']=$this->db->get('pinjaman_view')->result();
    $this->load->view('atas',$data);
    $this->load->view('approve/kasbon',$data);
    $this->load->view('bawah',$data);
}
//Untuk report
function lapkaryawan(){
    $data['com']=$this->db->get('company')->row();
    $data['all']=$this->db->get('karyawan_view')->result();
 $this->load->view('atas',$data);
    $this->load->view('laporan/karyawan',$data);
    $this->load->view('bawah',$data);

}
function lapkasbon(){
  $data['com']=$this->db->get('company')->row();
  $arr=array('status_aju'=>'APPROVE','status_pinjaman'=>'BELUM BAYAR');
  $this->db->select_sum('nominal_pinjaman');
  $this->db->where($arr);
    $data['sum']=$this->db->get('pinjaman_view')->row();
  $this->db->where($arr);
  $data['all']=$this->db->get('pinjaman_view')->result();
    $this->load->view('atas',$data);
    $this->load->view('laporan/kasbon',$data);
    $this->load->view('bawah',$data);
}
function lappengguna(){
  $data['com']=$this->db->get('company')->row();
  $data['all']=$this->db->get('users')->result();
    $this->load->view('atas',$data);
    $this->load->view('pengguna/pengguna',$data);
    $this->load->view('bawah',$data);
}
function slip(){
  $this->load->view('slip/slip');
}
function potongan(){
$data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get('potongan')->result();
    $this->load->view('atas',$data);
    $this->load->view('potongan/potongan',$data);
    $this->load->view('bawah',$data);

}
function addpotongan(){
  $data['com']=$this->db->get('company')->row();

  $this->load->model('m_list');
  $data['kode']=$this->m_list->potongan();
 $this->load->view('atas',$data);
    $this->load->view('potongan/add',$data);
    $this->load->view('bawah',$data); 
}
function editpotongan(){
  $id=$this->uri->segment(3);
    $data['com']=$this->db->get('company')->row();

  $data['all']=$this->db->get_where('potongan',array('id_potongan'=>$id))->row();
  $this->load->view('atas',$data);
    $this->load->view('potongan/edit',$data);
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
function ditelslip(){
        $data['com']=$this->db->get('company')->row();
        $id=$this->uri->segment(3);
        $this->db->distinct();
       $this->db->select('id_gaji,nip,bulan_gaji,status');
       $data['gaji']=$this->db->get_where('gaji2',array('nip'=>$id))->result();

        $data['nama']=$this->db->get_where('karyawan',array('nip'=>$id))->row();
   $this->load->view('atas',$data);
  $this->load->view('slip/ditel',$data);
  $this->load->view('bawah',$data);

}
function lappenggajian(){
          $data['com']=$this->db->get('company')->row();
            $this->db->distinct();
          $this->db->select('gaji_view.id_gaji,gaji_view.nip,karyawan.nama_lengkap,gaji_view.bulan_gaji,gaji_view.total_potongan,gaji_view. total_insentif,gaji_view.gapok,gaji_view.total_gaji');
          $this->db->from('gaji_view');
          $this->db->join('karyawan', 'karyawan.nip = gaji_view.nip', 'inner');
         $data['gaji']=$this->db->get()->result();
   
         $this->db->select_sum('total_insentif');
         
         $data['sum']=$this->db->get('gaji')->row();
         $this->db->select_sum('total_gaji');
         $data['gajip']=$this->db->get('gaji')->row();
 $this->load->view('atas',$data);
    $this->load->view('laporan/penggajian',$data);
    $this->load->view('bawah',$data);
}
function lapabsensi(){
  $data['com']=$this->db->get('company')->row();
$data['all']=$this->db->get('absensi_view')->result();


  $this->load->view('atas',$data);
  $this->load->view('laporan/absensi',$data);
  $this->load->view('bawah',$data);
}
function profil(){
  $data['com']=$this->db->get('company')->row();
  $id=$this->uri->segment(3);
$data['user']=$this->db->get_where('karyawan_view',array('nip'=>$id))->row();


  $this->load->view('atas',$data);
  $this->load->view('profil/profil',$data);
  $this->load->view('bawah',$data);
}
function editgaji(){
$data['com']=$this->db->get('company')->row();
$id=$this->uri->segment(3);
$isi=array('id_gaji'=>$id);
$data['kar']=$this->db->get_where('all_gaji_view',$isi)->row();
$data['absen']=$this->db->get_where('gaji_absensi', $isi)->row();
$data['periode']=$this->db->get_where('gaji2',$isi)->row();
$data['insentif']=$this->db->get('insentif')->result();
$data['potongan']=$this->db->get('potongan')->result();
  $this->load->view('atas',$data);
  $this->load->view('hitung/editgaji',$data);
  $this->load->view('bawah',$data);
}
function cetak(){

}
}
