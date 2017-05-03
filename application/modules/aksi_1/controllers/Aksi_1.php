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
  $nikah=$this->input->post('nikah');
  $status=$this->input->post('status');
  $sex=$this->input->post('sex',TRUE);
  $ttl=$this->input->post('ttl',TRUE);
  $join=$this->input->post('join',TRUE);
  $agama=$this->input->post('agama',TRUE);
  $edu=$this->input->post('edu',TRUE);
  $id=$this->input->post('id',TRUE);
  $idtype=$this->input->post('idtype',TRUE);
  $npwp=$this->input->post('npwp',TRUE);
  $jam=$this->input->post('jam',TRUE);
  $typeemploye=$this->input->post('typeemploye',TRUE);
  $bank=$this->input->post('bank',TRUE);
  $phone=$this->input->post('phone',TRUE);
  $email=$this->input->post('email',TRUE);
  $golongan=$this->input->post('golongan');
  $pass=trim(base64_encode($this->input->post('pass',TRUE)));
  $role=$this->input->post('role',TRUE);
  $job=$this->input->post('job',TRUE);
  $account=$this->input->post('account',TRUE);
  $address=$this->input->post('alamat',TRUE);
$personal=array('nip'=>$nip,'ttl'=>$ttl,'joindate'=>$join,'sex'=>$sex,'religion'=>$agama,
'jabatan'=>$job,'account_number'=>$account,'bank'=>$bank,'education'=>$edu,'address'=>$address,
'email'=>$email,'phone'=>$phone,'id_number'=>$id,'npwp'=>$npwp,'jamsostek'=>$jam,
'photo'=>'no.png','type_employe'=>$typeemploye,'golongan'=>$golongan,'status'=>$status,'merried_status'=>$nikah);
$login=array('nip'=>$nip,'name'=>$nama,'pass'=>$pass,'level'=>$role);
$this->db->insert('employe', $personal);
$this->db->insert('users', $login);

$this->session->set_flashdata('sukses', 'value');
redirect('home/employe');
}
function editemploye(){
  $nip=$this->input->post('nip');
  $nama=$this->input->post('nama',TRUE);
  $nikah=$this->input->post('nikah');
  $golongan=$this->input->post('golongan');
  $status=$this->input->post('status');
  $sex=$this->input->post('sex',TRUE);
  $ttl=$this->input->post('ttl',TRUE);
  $join=$this->input->post('join',TRUE);
  $agama=$this->input->post('agama',TRUE);
  $edu=$this->input->post('edu',TRUE);
  $id=$this->input->post('id',TRUE);
  $idtype=$this->input->post('idtype',TRUE);
  $npwp=$this->input->post('npwp',TRUE);
  $jam=$this->input->post('jam',TRUE);
  $typeemploye=$this->input->post('typeemploye',TRUE);
  $bank=$this->input->post('bank',TRUE);
  $phone=$this->input->post('phone',TRUE);
  $email=$this->input->post('email',TRUE);
  $pass=trim(base64_encode($this->input->post('pass',TRUE)));
  $role=$this->input->post('role',TRUE);
  $job=$this->input->post('job',TRUE);
  $account=$this->input->post('account',TRUE);
  $address=$this->input->post('alamat',TRUE);
  $personal=array('ttl'=>$ttl,'joindate'=>$join,'sex'=>$sex,'religion'=>$agama,
  'jabatan'=>$job,'account_number'=>$account,'bank'=>$bank,'education'=>$edu,'address'=>$address,
  'email'=>$email,'phone'=>$phone,'id_number'=>$id,'npwp'=>$npwp,'jamsostek'=>$jam,
  'type_employe'=>$typeemploye,'golongan'=>$golongan,'status'=>$status,'merried_status'=>$nikah);

  $login=array('name'=>$nama,'pass'=>$pass,'level'=>$role);
  $this->db->where('nip', $nip);
  $this->db->update('employe', $personal);
  $this->db->where('nip', $nip);
  $this->db->update('users', $login);

  $this->session->set_flashdata('update', 'value');
  redirect('home/employe');

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
function addsalary(){
  $gol=$this->input->post('gol',TRUE);
  $salary=$this->input->post('salary',TRUE);
  $jabatan=$this->input->post('jabatan',TRUE);
  $data=array('nominal'=>$salary,'jabatan'=>$jabatan,'golongan'=>$gol);
  $this->db->insert('m_gaji', $data);
  redirect('home/salary');
}
function editsalary(){
  $id=$this->input->post('id');
  $work=$this->input->post('work',TRUE);
  $salary=$this->input->post('salary',TRUE);
  $jabatan=$this->input->post('jabatan',TRUE);
  $gol=$this->input->post('gol');
  $data=array('nominal'=>$salary,'jabatan'=>$jabatan,'golongan'=>$gol);
  $this->db->where('id', $id);
  $this->db->update('m_gaji', $data);
  redirect('home/salary');
}
function addinsentif(){
  $task=$this->input->post('task',TRUE);
  $many=$this->input->post('many',TRUE);
  $gol=$this->input->post('gol',TRUE);
  $jab=$this->input->post('jabatan',TRUE);
  $nom=$this->input->post('nominal',TRUE);
  $data=array('tindakan'=>$task,'jml'=>$many,'jabatan'=>$jab,'golongan'=>$gol,'nominal'=>$nom);
  $this->db->insert('insentif', $data);
  redirect('home/insentif');
}
function editinsentif(){
  $id=$this->input->post('id');
  $task=$this->input->post('task',TRUE);
  $many=$this->input->post('many',TRUE);
  $gol=$this->input->post('gol',TRUE);
  $jab=$this->input->post('jabatan',TRUE);
  $nom=$this->input->post('nominal',TRUE);
  $data=array('tindakan'=>$task,'jml'=>$many,'jabatan'=>$jab,'golongan'=>$gol,'nominal'=>$nom);
  $this->db->where('id', $id);
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
  $data=array('id_cuti'=>$kode,'nip'=>$nip,'periode'=>$per,'expired'=>$expired,'terpakai'=>$used,'sisa'=>$sisa);
  $this->db->insert('m_cuti', $data);
  redirect('home/listleave');
}
function editleave(){
  $kode=$this->input->post('kode');
  $nip=$this->input->post('nip',TRUE);
  $per=$this->input->post('periode');
  $expired=$this->input->post('expired');
  $used=$this->input->post('used',TRUE);
  $sisa=$this->input->post('sisa',TRUE);
  $array=array('id_cuti'=>$kode,'nip'=>$nip,'periode'=>$per);
  $data=array('expired'=>$expired,'terpakai'=>$used,'sisa'=>$sisa);
  $this->db->where($array);

  $this->db->update('m_cuti', $data);
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
                   $dataexcel[$i - 1]['date'] = $data['cells'][$i][4];
                   $dataexcel[$i - 1]['overtime'] = $data['cells'][$i][5];
                   $dataexcel[$i - 1]['late'] = $data['cells'][$i][6];
                   $dataexcel[$i - 1]['total'] = $data['cells'][$i][7];
                   $dataexcel[$i - 1]['status'] = $data['cells'][$i][8];
              }
               for ($i = 0; $i < count($dataexcel); $i++) {
            $data = array(
                'nip' => $dataexcel[$i]['nip'],
                'in' => $dataexcel[$i]['in'],
                'out' => $dataexcel[$i]['out'],
                'date' => $dataexcel[$i]['date'],
                'overtime' => $dataexcel[$i]['overtime'],
                'late' => $dataexcel[$i]['late'],
                'total' => $dataexcel[$i]['total'],
                'status' => $dataexcel[$i]['status'],
            );


                 $this->db->insert('absensi', $data);



        }
      }

                    redirect($_SERVER['HTTP_REFERER']);




}
function cuti(){
  $kurang=1;
  $sisa=$this->input->post('sisa');
  $nip=$this->input->post('nip');
  $ket=$this->input->post('ket');
  $date=$this->input->post('tgl');
  $cuti=$this->db->get_where('m_cuti', array('nip'=>$nip,'sisa >'=>0))->row();

  $where=array('nip'=>$nip,'sisa >'=>'0');
  $data=array('nip'=>$nip,'date'=>$date,'ket'=>$ket,'approve_by'=>'Null','approve_date'=>'0000-00-00','status'=>'PENDING');
  $this->db->insert('cuti', $data);
  $potong=array('sisa'=>$sisa);
  $this->db->where($where);
  $this->db->update('m_cuti', $potong);
  redirect($_SERVER['HTTP_REFERER']);
}
function kasbon(){
  $id=$this->input->post('id');
  $no=$this->input->post('no');
$nominal=$this->input->post('nominal');
$tgl=$this->input->post('tgl');
$data=array('no_transaksi'=>$no,'nip'=>$id,'nominal'=>$nominal,'tgl'=>$tgl,'approve_by'=>'','status'=>'PENDING','status_byr'=>'BELUM BAYAR');
$this->db->insert('kasbon', $data);
redirect('home/kasbon');
}
}


/* End of file Aksi_1.php */
/* Location: ./application/controllers/ControllerName.php */
