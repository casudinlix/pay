<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
       
        //$this->load->model('model_name', 'model_alias');

    if(!$this->input->is_ajax_request()){
			exit('No direct script access allowed :)');
		}
     $this->load->model('m_gaji1','duddin');
     $this->load->model('m_insentif','insentif');
     $this->load->model('m_potongan', 'potongan');
     $this->load->model('m_pinjaman', 'pinjaman');
     $this->load->model('m_print_gaji', 'print');
     $this->load->model('m_slip', 'slip');
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
  function slip(){


  $list = $this->print->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $print) {
      $no++;
      $row = array();
       
      $row[] = $print->id_gaji;
      $row[] = tgl_indo($print->bulan_gaji);
      $row[] = $print->nip;
      $row[] = $print->nama_lengkap;
      $row[] = $print->nama_jabatan;
      $row[] = $print->gol_jabatan;
     
        if ($print->status=="POSTING") {
                 $row[]="<span class='label label-warning'>".$print->status."</span>";

        }else{
       $row[]="<span class='label label-danger'>".$print->status."</span>";

        }
      
      if ($print->status=="PENDING") {
        $row[]="<span class='label label-danger'>".$print->status."</span>";


      }else{
$row[] = "<button id=". $print->id_gaji."/".$print->nip." class='btn btn-success' onclick='printgajih(this.id)'><i class='fa fa-print'></i></button>";
      }



      //add html for action
         
         
        

    
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->print->count_all(),
            "recordsFiltered" => $this->print->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
  }
  function slipemp(){

 $id=$this->uri->segment(3);
  $list = $this->slip->get_datatables($id);
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $print) {
      $no++;
      $row = array();
       
      $row[] = $print->id_gaji;
      $row[] = tgl_indo($print->bulan_gaji);
      $row[] = $print->nip;
      $row[] = $print->nama_lengkap;
      $row[] = $print->nama_jabatan;
      $row[] = $print->gol_jabatan;
     
        if ($print->status=="POSTING") {
                 $row[]="<span class='label label-warning'>".$print->status."</span>";

        }else{
       $row[]="<span class='label label-danger'>".$print->status."</span>";

        }
      
      if ($print->status=="PENDING") {
        $row[]="<span class='label label-danger'>".$print->status."</span>";


      }else{
$row[] = "<button id=". $print->id_gaji."/".$print->nip." class='btn btn-success' onclick='printgajih(this.id)'><i class='fa fa-print'></i></button>";
      }



      //add html for action
         
         
        

    
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->print->count_all(),
            "recordsFiltered" => $this->print->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
  }
  function hitunggaji(){
    $id=$this->uri->segment(3);
      //$this->db->select('sift_name, jam_in,jam_out');
       //$this->db->like();gaji
    $this->db->like('nip',$id);
   $this->db->or_like('nama_lengkap', $id);
   
          $data =$this->db->get('all_view_1');
          $rows = array();
          foreach($data->result() as $row)
          {
            $rows[]=$row;
          }
          // minimal PHP 5.2
          echo json_encode($rows);



  }

  function caripinjaman(){
     $id=$this->uri->segment(3);
      $this->db->select('no_transaksi, nip,nama_lengkap,nominal_pinjaman,status_pinjaman');

       //$this->db->like();
    $this->db->or_like('nip',$id);
   
   $this->db->where('status_aju', 'APPROVE');
   
          $data =$this->db->get('pinjaman_view');
          $rows = array();
          foreach($data->result() as $row)
          {
            $rows[]=$row;
          }
          // minimal PHP 5.2
          echo json_encode($rows);

  }
  function hutang(){
    $keyword=$this->uri->segment(3);
      //$this->db->select('sift_name, jam_in,jam_out');
       //$this->db->like();
    //$this->db->select_sum('nominal_kasbon');

    $this->db->where('status_aju', "APPROVE");
    $this->db->where('status_kasbon', "BELUM BAYAR");
          $data =$this->db->get('kasbon_view');
          foreach($data->result() as $row)
          {
            $arr['query'] = $keyword;
            $arr['suggestions'][] = array(
              'value' =>$row->nip,
              'nominal_kasbon' =>$row->nominal_kasbon
              

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
  $lama=$this->uri->segment(7);
  $kunci=$this->uri->segment(8);
  $tgl=date('Y-m-d') ;
  $user=$this->session->userdata('nama');
  $w=array('id'=>$kunci);


  $data=array('tgl_approve'=>$tgl,'disetujui_oleh'=>$user,'status_cuti'=>'APPROVE');
  $data1=array('tgl_approve'=>$tgl,'disetujui_oleh'=>$user,'status_cuti'=>'REJECT');

  if ($s=="REJECT") {
    $this->db->where($w);
    $this->db->update('aju_cuti',$data1);

$cek=$this->db->get_where('jatah_cuti',array('id_jc'=>$id));
foreach ($cek->result() as $key) {
  $sisa=$key->sisa_cuti;
}
$data2=array('sisa_cuti'=>$sisa+$lama,'terpakai'=>$lama-$lama);
$this->db->where('id_jc', $id);
$this->db->update('jatah_cuti', $data2);
    echo "OK";
  } else{
    $this->db->where('id',$kunci);
    $this->db->update('aju_cuti',$data);
    echo "OK";
}


}
function kasbon(){
  $no=$this->uri->segment(3);
  $this->db->where('no_transaksi', $no);
$this->db->delete('pinjaman');
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
  $this->db->update('pinjaman', $data);
  echo "ok approve";
}else{
  $this->db->where('no_transaksi', $no);
  $this->db->update('pinjaman', $data);
  echo "ok reject";
}

}
function postingajucuti(){
  $id=$this->uri->segment(3);
  $nip=$this->uri->segment(4);
  $lama=$this->uri->segment(5);
  $status=$this->uri->segment(6);
  $kunci=$this->uri->segment(7);
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
  $this->db->where('id', $kunci);
  $this->db->update('aju_cuti', $data1);


}
function hapusinsentif(){
  $arr=array('id'=>$this->uri->segment(3));
  $this->db->where($arr);
  $this->db->delete('gaji_insentif');
}
function hapuspinjaman(){
  $arr=array('id'=>$this->uri->segment(3));
  $no=array('no_transaksi'=>$this->uri->segment(4));
 
  $this->db->where($arr);
  $this->db->delete('gaji_pinjaman');
  $this->db->where($no);
  $this->db->update('pinjaman', array('status_pinjaman'=>'BELUM BAYAR'));


}
function hapuspotongan(){
  $arr=array('id'=>$this->uri->segment(3));
  $this->db->where($arr);
  $this->db->delete('gaji_potongan');
}
function gaji(){

  $list = $this->duddin->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $duddin) {
      $no++;
      $row = array();
      $row[] = '<input type="checkbox" class="data-check" value="'.$duddin->id_gaji.'">';
      $row[] = $duddin->id_gaji;
      $row[] = tgl_indo($duddin->bulan_gaji);
      $row[] = $duddin->nip;
      $row[] = $duddin->nama_lengkap;
      $row[] = $duddin->nama_jabatan;
      $row[] = $duddin->gol_jabatan;
     
        if ($duddin->status=="POSTING") {
                 $row[]="<span class='label label-warning'>".$duddin->status."</span>";

        }else{
       $row[]="<span class='label label-danger'>".$duddin->status."</span>";

        }
      
      

      //add html for action
        if ($duddin->status=="POSTING") {
        $row[]="<span class='label label-warning'>"."COMPLETE"."</span>";
        }else{
$row[] = '<a class="btn btn-sm btn-primary" href="editgaji/'."".$duddin->id_gaji."".'" title="Edit" ><i class="fa fa-pencil"></i> Edit</a>';
    }
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->duddin->count_all(),
            "recordsFiltered" => $this->duddin->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
}
function insentiflist(){
  $id=$this->uri->segment(3);
  $list = $this->insentif->get_datatables($id);
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $insentif) {
      $no++;
      $row = array();
      
      
       
       
       
      $row[] = $insentif->jenis_insentif;
      $row[] = 'Rp. '.number_format($insentif->nominal_insentif);
      $row[] = $insentif->jml_insentif."  x";
      $row[] = "Rp. ".number_format($insentif->jml_insentif*$insentif->nominal_insentif);
     
         
      
      

      //add html for action
      $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onClick="hapusinsentif('."'".$insentif->id."'".')"><i class="fa fa-trash-o"></i> Hapus</a>
          ';
    
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->insentif->count_all(),
            "recordsFiltered" => $this->insentif->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
}
function potonganlist(){

  $id=$this->uri->segment(3);
  $list = $this->potongan->get_datatables($id);
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $potongan) {
      $no++;
      $row = array();
      
      
       
       
       
      $row[] = $potongan->jenis_potongan;
      $row[] = 'Rp. '.$potongan->nominal_potongan;
      $row[] = $potongan->jml_potongan;
      $row[] = "Rp. ".number_format($potongan->jml_potongan*$potongan->nominal_potongan);
     
         
      
      

      //add html for action
      $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" 
      onClick="hapuspotongan('."'".$potongan->id."'".')"><i class="fa fa-trash-o"></i> Hapus</a>
          ';
    
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->insentif->count_all(),
            "recordsFiltered" => $this->insentif->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
}
private function _validate()
  {
    $data = array();
    $data['error_string'] = array();
    $data['inputerror'] = array();
    $data['status'] = TRUE;

    if($this->input->post('nip') == '')
    {
      $data['inputerror'][] = 'nip';
      $data['error_string'][] = 'NIP is required';
       
      

      $data['status'] = FALSE;
     echo "<script>swal('Gagal Menambahkan!', 'Isi Data Dengan Lengkap', 'error')</script>";

    }
    if($this->input->post('idinsentif') == '')
    {
      $data['inputerror'][] = 'nip';
      $data['error_string'][] = 'NIP is required';
      $data['status'] = FALSE;
      echo "<script>swal('Gagal Menambahkan!', 'Isi Data Dengan Lengkap', 'error')</script>";
       
      
      
   

    }


    if($data['status'] === FALSE)
    {
      echo json_encode($data);
      exit();
    }
  }
  private function _cekpotongan()
  {
    $data = array();
    $data['error_string'] = array();
    $data['inputerror'] = array();
    $data['status'] = TRUE;

    if($this->input->post('nip') == '')
    {
      $data['inputerror'][] = 'nip';
      $data['error_string'][] = 'NIP is required';
       
      

      $data['status'] = FALSE;
     echo "<script>swal('Gagal Menambahkan!', 'Isi Data Dengan Lengkap', 'error')</script>";

    }
    if($this->input->post('potongan') == '')
    {
      $data['inputerror'][] = 'nip';
      $data['error_string'][] = 'Kolom Potongan Harus Di Isi';
      $data['status'] = FALSE;
      echo "<script>swal('Gagal Menambahkan!', 'Isi Data Dengan Lengkap', 'error')</script>";
       
      
      
   

    }


    if($data['status'] === FALSE)
    {
      echo json_encode($data);
      exit();
    }
  }
function tambahinsentif(){
  $this->_validate();
  $data=array(
    'id_gaji'=>$this->input->post('id', TRUE),
    'id_insentif'=>$this->input->post('idinsentif', TRUE),
    'nip'=>$this->input->post('nip'),
    'jml_insentif'=>$this->input->post('banyak', TRUE)
    );

  $this->db->insert('gaji_insentif', $data);
  //reload_table();
  echo json_encode(array("status" => TRUE));

}

function tambahpotongan(){
  $this->_cekpotongan();
  $data=array(
    'id_gaji'=>$this->input->post('id', TRUE),
    'id_potongan'=>$this->input->post('potongan', TRUE),
    'nip'=>$this->input->post('nip',TRUE),
    'jml_potongan'=>$this->input->post('banyak', TRUE)
    );
  $this->db->insert('gaji_potongan', $data);
  //reload_table();
  echo json_encode(array("status" => TRUE));
}
function pinjamanlist(){
  $id=$this->uri->segment(3);
  $list = $this->pinjaman->get_datatables($id);
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $pinjaman) {
      $no++;
      $row = array();
      
      
       
       
       
      $row[] = $pinjaman->no_transaksi;
      $row[] = 'Rp. '.number_format($pinjaman->nominal_pinjaman);
      
         
      
      

      //add html for action
      $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" 
      onClick="hapuspinjaman('."'".$pinjaman->id."/".$pinjaman->no_transaksi."'".')"><i class="fa fa-trash-o"></i> Hapus</a>
          ';
    
      $data[] = $row;
    }

    $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->insentif->count_all(),
            "recordsFiltered" => $this->insentif->count_filtered(),
            "data" => $data,
        );
    //output to json format
    echo json_encode($output);
}

function tambahpinjaman(){
  $this->_cekpinjaman();
  $data=array(
    'id_gaji'=>$this->input->post('id', TRUE),
    'nip'=>$this->input->post('nip1', TRUE),
    'no_transaksi'=>$this->input->post('no',TRUE),

    );
  $data1=array('status_pinjaman'=>'LUNAS');
$no=$this->input->post('no', TRUE);
  $this->db->insert('gaji_pinjaman', $data);
  $this->db->where('no_transaksi', $no);
  $this->db->update('pinjaman', $data1);
  //reload_table();
  echo json_encode(array("status" => TRUE));
}
private function _cekpinjaman()
  {
    $data = array();
    $data['error_string'] = array();
    $data['inputerror'] = array();
    $data['status'] = TRUE;

    if($this->input->post('nip1') == '')
    {
      $data['inputerror'][] = 'nip';
      $data['error_string'][] = 'NIP is required';       
      $data['status'] = FALSE;
     echo "<script>swal('Gagal Menambahkan!', 'Isi Data Dengan Lengkap', 'error')</script>";

    }
    if($this->input->post('no') == '')
    {
      $data['inputerror'][] = 'NO Transaksi';
      $data['error_string'][] = 'Kolom Potongan Harus Di Isi';
      $data['status'] = FALSE;
      echo "<script>swal('Gagal Menambahkan!', 'Isi Data Dengan Lengkap', 'error')</script>";
   }


    if($data['status'] === FALSE)
    {
      echo json_encode($data);
      exit();
    }
  }
  public function ajax_bulk_delete()
  {
    $list_id = $this->input->post('id');

    foreach ($list_id as $id) {
      
      $this->duddin->delete_by_id($id);
    }
    echo json_encode(array("status" => TRUE));
  }
}


/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */
