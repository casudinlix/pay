<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aksi_1 extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
  }

  public function index()
  {
if (empty($_POST)) {
  redirect('home');
}

  }
function addemploye(){
  $nip=$this->input->post('nip',TRUE);
  $nama=$this->input->post('nama',TRUE);
   
  $status=$this->input->post('status');
  $sex=$this->input->post('sex',TRUE);
  $ttl=$this->input->post('ttl',TRUE);
  $join=$this->input->post('join',TRUE);
  $agama=$this->input->post('agama',TRUE);
  $edu=$this->input->post('edu',TRUE);
  $id=$this->input->post('id',TRUE);
  $idtype=$this->input->post('idtype',TRUE);
   
  $jam=$this->input->post('jam',TRUE);
   
  $bank=$this->input->post('bank',TRUE);
  $phone=$this->input->post('phone',TRUE);
  $email=$this->input->post('email',TRUE);
  $golongan=$this->input->post('golongan');
  $pass=trim(base64_encode($this->input->post('pass',TRUE)));
  $role=$this->input->post('role',TRUE);
  $job=$this->input->post('job',TRUE);
  $account=$this->input->post('account',TRUE);
  $address=$this->input->post('alamat',TRUE);

$personal=array('nip'=>$nip,'nama_lengkap'=>$nama,'tgl_lahir'=>$ttl,'tgl_bergabung'=>$join,'jk'=>$sex,'agama'=>$agama,'id_jabatan'=>$job,'gol_jabatan'=>$golongan,'no_rek'=>$account,'bank'=>$bank,'pendidikan'=>$edu,'alm_tinggal'=>$address,
'email'=>$email,'no_hp'=>$phone,'no_id'=>$id,'jenis_id'=>$idtype,'foto'=>'no.png','status'=>$status);
 
$this->db->insert('karyawan', $personal);
//$this->db->insert('users', $login);

$this->session->set_flashdata('sukses', 'value');
redirect('home/employe');
}
function editemploye(){
  $nip=$this->input->post('nip',TRUE);
  $nama=$this->input->post('nama',TRUE);
   
  $status=$this->input->post('status');
  $sex=$this->input->post('sex',TRUE);
  $ttl=$this->input->post('ttl',TRUE);
  $join=$this->input->post('join',TRUE);
  $agama=$this->input->post('agama',TRUE);
  $edu=$this->input->post('edu',TRUE);
  $id=$this->input->post('id',TRUE);
  $idtype=$this->input->post('idtype',TRUE);
   
  $jam=$this->input->post('jam',TRUE);
   
  $bank=$this->input->post('bank',TRUE);
  $phone=$this->input->post('phone',TRUE);
  $email=$this->input->post('email',TRUE);
  $golongan=$this->input->post('golongan');
  $pass=trim(base64_encode($this->input->post('pass',TRUE)));
  $role=$this->input->post('role',TRUE);
  $job=$this->input->post('job',TRUE);
  $account=$this->input->post('account',TRUE);
  $address=$this->input->post('alamat',TRUE);

$personal=array('nama_lengkap'=>$nama,'tgl_lahir'=>$ttl,'jk'=>$sex,'agama'=>$agama,'id_jabatan'=>$job,'gol_jabatan'=>$golongan,'no_rek'=>$account,'bank'=>$bank,'pendidikan'=>$edu,'alm_tinggal'=>$address,
'email'=>$email,'no_hp'=>$phone,'no_id'=>$id,'jenis_id'=>$idtype,'status'=>$status);
$this->db->where('nip', $nip);
 $this->db->update('karyawan', $personal);

  $this->session->set_flashdata('update', 'value');
  redirect('home/employe');

      }
function addpotongan(){
  $id=$this->input->post('id', TRUE);
  $jenis=$this->input->post('jenis', TRUE);
$nom=$this->input->post('nom', TRUE);
$data=array('id_potongan'=>$id,'jenis_potongan'=>$jenis,'nominal_potongan'=>$nom);
$this->db->insert('potongan', $data);

  redirect('home/potongan');

}
function editpotongan(){
  $id=$this->input->post('id', TRUE);
$jenis=$this->input->post('jenis', TRUE);
$nom=$this->input->post('nom', TRUE);
$data=array('jenis_potongan'=>$jenis,'nominal_potongan'=>$nom);
$this->db->where('id_potongan', $id);
$this->db->update('potongan', $data);

  redirect('home/potongan');

}


function company(){
  $id=$this->input->post('id',TRUE);
  $title=$this->input->post('title',TRUE);
  $des=$this->input->post('des',TRUE);
  $logo=$this->input->post('logo',TRUE);
  $add=$this->input->post('alamat',TRUE);
  $tlp=$this->input->post('tlp',TRUE);
  $nmfile                  = "logo";
  $config['upload_path']     = './upload/logo';
    $config['allowed_types'] = 'gif|jpg|png|ico';


    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if ($foto=$this->upload->do_upload('logo')) {
      $gbr        = $this->upload->data();
      $data=array('title'=>$title,'desc'=>$des,'address'=>$add,'phone'=>$tlp,'logo'=>$gbr['file_name']);
      $this->db->where('com', $id);
      $this->db->update('company', $data);

        $this->session->set_flashdata('update', 'value');
        redirect('home/company/1');
    }else{
      echo $this->upload->display_errors();
    }


}
function addshift(){
  $nama=$this->input->post('nama',TRUE);
  $in=$this->input->post('in',TRUE);
  $out=$this->input->post('out',TRUE);
  $data=array('sift_name'=>$nama,'jam_in'=>$in,'jam_out'=>$out);
  $this->db->insert('shift', $data);

  $this->session->set_flashdata('sukses', 'value');
  redirect('home/settingsift');
}
function setjadwal(){
  $date=$this->input->post('date',TRUE);
  $shift=trim($this->input->post('shift',TRUE));
  $in=$this->input->post('in',TRUE);
  $out=$this->input->post('out',TRUE);
  $nip=$this->input->post('nip');
  $nama=$this->input->post('nama');
  $d=$this->db->get('schedule')->row();
$tt=$this->db->select('aktual_date');
  $cek=$this->db->get_where('schedule',array('aktual_date < '=>$date));
//  if ($cek->num_rows() == 1) {
    //$this->session->set_flashdata('jadwal', 'value');
  //  redirect($_SERVER['HTTP_REFERER']);

//  }
  $data=array('nip'=>$nip,'shift'=>$shift,'aktual_date'=>$date,'aktual_in'=>$in,'aktual_out'=>$out);
  $this->db->insert('schedule', $data);
  redirect($_SERVER['HTTP_REFERER']);
}
function ajucuti(){
  $id=$this->input->post('id', TRUE);
  $tgl=date("Y-m-d");
  $periode=$this->input->post('periode', TRUE);
  $ket=$this->input->post('ket', TRUE);
  $awal=$this->input->post('awal', TRUE);
  $akhir=$this->input->post('akhir', TRUE);
  $data=array('id_cuti'=>$periode,'nip'=>$id,'tgl_awal_cuti'=>$awal,'tgl_akhir_cuti'=>$akhir,'ket_cuti'=>$ket,
    'status_cuti'=>'PENDING','tgl_aju_cuti'=>$tgl);
  $this->db->insert('aju_cuti', $data);
  redirect('home/leave/'.$id);

}
function addsalary(){
  $gol=$this->input->post('gol',TRUE);
  $salary=$this->input->post('salary',TRUE);
  $jabatan=$this->input->post('jabatan',TRUE);
  $data=array('gapok'=>$salary,'id_jabatan'=>$jabatan,'gol_jabatan'=>$gol);
  $this->db->insert('m_gaji', $data);
  redirect('home/salary');
}
function addjabatan(){
  $code=$this->input->post('code', TRUE);
  $nama=$this->input->post('nama', TRUE);
  $golongan=$this->input->post('golongan', TRUE);
  $data=array('id_jabatan'=>$code,'nama_jabatan'=>$nama);
  $this->db->insert('jabatan', $data);
  redirect('home/jabatan');

}
function editjabatan(){
  $code=$this->input->post('code', TRUE);
  $nama=$this->input->post('nama', TRUE);
  $golongan=$this->input->post('golongan', TRUE);
  $data=array('nama_jabatan'=>$nama);
  $this->db->where('id_jabatan', $code);
  $this->db->update('jabatan', $data);
  redirect('home/jabatan');
}
function adduser(){
$code=$this->input->post('code', TRUE);
$nama=$this->input->post('nama', TRUE);
 $pass=base64_encode($this->input->post('pass', TRUE));
$hak=$this->input->post('hak', TRUE);
$data=array('nip'=>$code,'nama_lengkap'=>$nama,'pass'=>$pass,'hak_akses'=>$hak);
$this->db->insert('users', $data);
redirect('home/user');
}
function edituser(){
  $code=$this->input->post('code', TRUE);
  $nama=$this->input->post('nama', TRUE);
 $pass=base64_encode($this->input->post('pass', TRUE));
$hak=$this->input->post('hak', TRUE);
$data=array('nama_lengkap'=>$nama,'pass'=>$pass,'hak_akses'=>$hak);
$this->db->where('nip', $code);
$this->db->update('users', $data);
redirect('home/user');
}
function editsalary(){
  $id=$this->input->post('id');
  $work=$this->input->post('work',TRUE);
  $salary=$this->input->post('salary',TRUE);
  $jabatan=$this->input->post('jabatan',TRUE);
  $gol=$this->input->post('gol');
  $data=array('gapok'=>$salary,'id_jabatan'=>$jabatan,'gol_jabatan'=>$gol);
  $this->db->where('id', $id);
  $this->db->update('m_gaji', $data);
  redirect('home/salary');
}
function addinsentif(){
  $code=$this->input->post('code', TRUE);
  $nom=$this->input->post('nominal', TRUE);
  $jenis=$this->input->post('jenis', TRUE);
  $jml=$this->input->post('jml', TRUE);
  $jab=$this->input->post('jabatan', TRUE);
  $gol=$this->input->post('gol', TRUE);
  $data=array('id_insentif'=>$code,'jenis_insentif'=>$jenis,'jml_insentif'=>$jml,'id_jabatan'=>$jab,'gol_jabatan'=>$gol,'nominal_insentif'=>$nom);
  $this->db->insert('insentif', $data);

  redirect('home/insentif');
}
function editinsentif(){
   $code=$this->input->post('code', TRUE);
  $nom=$this->input->post('nominal', TRUE);
  $jenis=$this->input->post('jenis', TRUE);
  $jml=$this->input->post('jml', TRUE);
  $jab=$this->input->post('jabatan', TRUE);
  $gol=$this->input->post('gol', TRUE);
  $data=array('jenis_insentif'=>$jenis,'jml_insentif'=>$jml,'id_jabatan'=>$jab,'gol_jabatan'=>$gol,'nominal_insentif'=>$nom);
  $this->db->where('id_insentif', $code);
  $this->db->update('insentif', $data);
  redirect('home/insentif');
}
function addleave(){
  $kode=$this->input->post('kode');
  $nip=$this->input->post('nip',TRUE);
  $nama=$this->input->post('nama',TRUE);
  $per=$this->input->post('periode');
  $expired=$this->input->post('expired');
  $used=$this->input->post('used',TRUE);
  $sisa=$this->input->post('sisa',TRUE);
  $data=array('id_jc'=>$kode,'nip'=>$nip,'awal_berlaku_cuti'=>$per,'akhir_berlaku_cuti'=>$expired,'terpakai'=>$used,'sisa_cuti'=>$sisa);
  $this->db->insert('jatah_cuti', $data);
  redirect('home/listleave');
}
function editleave(){
  $kode=$this->input->post('kode');
  $nip=$this->input->post('nip',TRUE);
  $per=$this->input->post('periode');
  $expired=$this->input->post('expired');
  $used=$this->input->post('used',TRUE);
  $sisa=$this->input->post('sisa',TRUE);
  $array=array('id_jc'=>$kode);

  $data=array('awal_berlaku_cuti'=>$per,'akhir_berlaku_cuti'=>$expired,'terpakai'=>$used,'sisa_cuti'=>$sisa);
  $this->db->where('id_jc',$kode);

  $this->db->update('jatah_cuti', $data);
  redirect('home/listleave');
}
function import(){
  $fileName = time().$_FILES['file']['name'];

        $config['upload_path'] = './upload/absensi/'; //buat folder dengan nama assets di root folder
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if(! $this->upload->do_upload('file') ){
        $this->upload->display_errors();
}else{
        $media = $this->upload->data('file');
        $inputFileName = './upload/absensi/'.$media['file_name'];
        // jika berhasil upload ambil data dan masukkan ke database
              $upload_data = $this->upload->data();

              // load library Excell_Reader
              $this->load->library('Excel_reader');

              //tentukan file

              $file = $upload_data['full_path'];
              $this->excel_reader->read($file);
              error_reporting(E_ALL ^ E_NOTICE);
              // array data
              $data = $this->excel_reader->sheets[0];
              $dataexcel = Array();
              for ($i = 1; $i <= $data['numRows']; $i++) {
                   if ($data['cells'][$i][1] == '')
                       break;
                   $dataexcel[$i - 1]['nip'] = $data['cells'][$i][1];
                   $dataexcel[$i - 1]['in'] = $data['cells'][$i][2];
                   $dataexcel[$i - 1]['out'] = $data['cells'][$i][3];
                   $dataexcel[$i - 1]['tgl_absensi'] = $data['cells'][$i][4];
                   $dataexcel[$i - 1]['lembur'] = $data['cells'][$i][5];
                   $dataexcel[$i - 1]['telat'] = $data['cells'][$i][6];
                   $dataexcel[$i - 1]['total'] = $data['cells'][$i][7];
                   $dataexcel[$i - 1]['status'] = $data['cells'][$i][8];
              }
               for ($i = 0; $i < count($dataexcel); $i++) {
            $data = array(
                'nip' => $dataexcel[$i]['nip'],
                'in' => $dataexcel[$i]['in'],
                'out' => $dataexcel[$i]['out'],
                'tgl_absensi' => $dataexcel[$i]['tgl_absensi'],
                'lembur' => $dataexcel[$i]['lembur'],
                'telat' => $dataexcel[$i]['telat'],
                'total' => $dataexcel[$i]['total'],
                'status' => $dataexcel[$i]['status'],
            );


                 $this->db->insert('absensi', $data);



        }
      }

                    redirect($_SERVER['HTTP_REFERER']);




}
function cuti(){
  $id=$this->input->post('id');
  $sisa=$this->input->post('sisa');
  $nip=$this->input->post('nip');
  $ket=$this->input->post('ket');
  $date=$this->input->post('tgl');
  $data=array('id_cuti'=>$id,'nip'=>$nip,'date'=>$date,'ket'=>$ket,'approve_by'=>'','approve_date'=>'','status'=>'PENDING');
  $this->db->insert('cuti', $data);



  redirect($_SERVER['HTTP_REFERER']);
}
function potongcuti(){
  $id=$this->input->post('kode');
  $tgl=$this->input->post('tgl');
$this->db->select('sisa,terpakai');
$total=$this->db->get_where('m_cuti',array('id_cuti'=>$id));
foreach ($total->result() as $key) {
  $sisa=$key->sisa;
  $terpakai=$key->terpakai;
}
//echo $sisa."<br />";
//echo $terpakai;

echo $kurangi=$this->db->get_where('cuti',array('id_cuti'=>$id,'date'=>$tgl))->num_rows();

$data=array('sisa'=>$sisa - $kurangi,'terpakai'=> $terpakai+ $kurangi);
$s=array('status'=>'POSTING');
$this->db->where('id_cuti', $id);
$this->db->update('m_cuti', $data);
$this->db->where('id_cuti', $id);
$this->db->update('cuti', $s);
$this->session->set_flashdata('potongcuti', 'value');
redirect($_SERVER['HTTP_REFERER']);


}
function kasbon(){
  $id=$this->input->post('id');
  $no=$this->input->post('no');
$nominal=$this->input->post('nominal');
$tgl=$this->input->post('tgl');
$ket=$this->input->post('ket', TRUE);
$data=array('no_transaksi'=>$no,'nip'=>$id,'nominal_pinjaman'=>$nominal,'ket_pinjaman'=>$ket,'tgl_aju_pinjaman'=>$tgl,'disetujui_oleh'=>'','status_aju'=>'PENDING','status_pinjaman'=>'BELUM BAYAR');
$this->db->insert('pinjaman', $data);

redirect('home/kasbon/'.$id);
}
function hitunggaji(){
  if (isset($_POST['tambah'])) {
    
  $code=$this->input->post('code', TRUE);
   $in=$this->input->post('in', TRUE);
  $user=$this->session->userdata('nama');
  $idgaji=$this->uri->segment(5);
  $tgl=date('Y-m-d');
   $jam=date("Y-m-d H:m:s");
$nip=$this->input->post('nip', TRUE);
$gol=$this->input->post('gol', TRUE);
$data=array('id_gaji'=>$code,'bulan_gaji'=>$tgl,'nip'=>$nip,'id_insentif'=>$in,'tgl_input'=>$jam,'user'=>$user);
$this->db->insert('gaji_detail', $data);
//redirect('home/hitunggaji/'.$nip.'/'.$gol.'/'.$idgaji);
redirect($_SERVER['HTTP_REFERER']);
  }
  if (isset($_POST['posting'])) {
    echo "Posting";
    $id=$this->input->post('idgaji', TRUE);
    $nip=$this->input->post('nip', TRUE);
$hari=$this->input->post('hari', TRUE);
$ijin=$this->input->post('ijin', TRUE);
$lembur=$this->input->post('lembur', TRUE);
$mangkir=$this->input->post('alpa', TRUE);
$cuti=$this->input->post('cuti', TRUE);
$telat=$this->input->post('telat', TRUE);
$this->db->select_sum('nominal_insentif');
$jml=$this->db->get_where('gaji_detail_view',array('id_gaji'=>$id))->row();
foreach ($jml as $value) {
   $insentif=$value;
}

$jml1=$this->db->get_where('all_view_1',array('nip'=>$nip))->result();
foreach ($jml1 as $value) {
  echo $gapok=$value->gapok;

}

$jml2=$this->db->get_where('pinjaman',array('nip'=>$nip,'status_aju'=>'APPROVE','status_pinjaman'=>'BELUM BAYAR'))->result();
foreach ($jml2 as $value) {
  echo $pinjaman=$value->nominal_pinjaman;
  $idpinjaman=$value->no_transaksi;

}

$data= array('id_gaji' =>$id,'total_potongan'=>$pinjaman,'total_insentif'=>$insentif,
'total_hari'=>$hari,'total_alpa'=>$mangkir,'total_telat'=>$telat,'total_ijin'=>$ijin,'total_lembur'=>$lembur,'total_ijin'=>$ijin,'gapok'=>$gapok,'total_gaji'=>$gapok-$pinjaman+$insentif,'status_gaji'=>'POSTING');
$this->db->insert('gaji', $data);
$this->db->where('id_gaji', $id);
$this->db->update('gaji_detail', array('status'=>'POSTING'));
$this->db->where('no_transaksi', $idpinjaman);
$this->db->update('pinjaman', array('status_pinjaman'=>'LUNAS'));
$this->session->set_flashdata('gaji', 'value');
redirect('home/hitung');



  }
  if (isset($_POST['tambahpinjaman'])) {
    $pin=$this->input->post('pin', TRUE);
  $arr=array('id_gaji'=>$this->input->post('id', TRUE));
$data=array('no_transaksi'=>$pin);
$this->db->where($arr);
  $this->db->update('gaji_detail',$data);

redirect($_SERVER['HTTP_REFERER']);

  }

}

}


/* End of file Aksi_1.php */
/* Location: ./application/controllers/ControllerName.php */
