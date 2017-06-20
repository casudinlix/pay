
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('fpdf_gen');
    $this->load->helper('tgl');
    if($this->session->userdata('login') == TRUE)
    {
      
      }else {
        $this->session->set_flashdata('error','value');
            redirect('login');
      }
	}

	public function index()
	{
		
	}
	function cetakkaryawan(){
		

 $this->fpdf->Image(img('gz.png'),10,1,25);
    $this->fpdf->Cell(25);
$this->fpdf->SetFont('Times','B',25);
$this->fpdf->Cell(0,5,'Rumah Sakit Ibu Dan Anak GIZAR',25,1,'C');
$this->fpdf->Cell(30);
 
$this->fpdf->SetFont('Times','I',8);
$this->fpdf->Cell(0,5,' Jl. Villa Mutiara Cikarang 1  Ruko Pasedena Blok RA No. 3-6 Kel. Ciantra  Kec. Cikarang Selatan - Bekasi, Telp. (021) 89677239/40
',0,1,'C');
$this->fpdf->Cell(25);
 
$this->fpdf->SetLineWidth(1);
$this->fpdf->Line(30,36,285,36);
$this->fpdf->SetLineWidth(0);
$this->fpdf->Line(30,37,285,37);
$this->fpdf->Ln(20);
//akhir header
//tabel
$this->fpdf->SetFont('Times','B',10);
$this->fpdf->Cell(10,10,'No',1,0,'C');
$this->fpdf->Cell(15,10,'NIP',1,0,'C');
$this->fpdf->Cell(30,10,'Nama Karyawan',1,0,'C');
$this->fpdf->Cell(20,10,'Ttl',1,0,'C');
$this->fpdf->Cell(20,10,'Agama',1,0,'C');
$this->fpdf->Cell(20,10,'Kelamin',1,0,'C');
$this->fpdf->Cell(27,10,'Tgl Bergabung',1,0,'C');
$this->fpdf->Cell(20,10,'Jabatan',1,0,'C');
$this->fpdf->Cell(10,10,'Gol',1,0,'C');
$this->fpdf->Cell(20,10,'Pendidikan',1,0,'C');
 
$this->fpdf->Cell(20,10,'No HP',1,0,'C');
$this->fpdf->Cell(25,10,'Email',1,0,'C');
$this->fpdf->Cell(20,10,'Status',1,0,'C');

$this->fpdf->Ln();
$this->fpdf->SetFont('Helvetica','I',6);
$data=$this->db->get('karyawan_view')->result();
$no=1;
foreach ($data as $key) {

$this->fpdf->Cell(10,10,$no,1,0,'C');
$this->fpdf->Cell(15,10,$key->nip,1,0,'C');
$this->fpdf->Cell(30,10,$key->nama_lengkap,1,0,'L');
$this->fpdf->Cell(20,10,tgl_indo($key->tgl_lahir),1,0,'L');
$this->fpdf->Cell(20,10,$key->agama,1,0,'C');
$this->fpdf->Cell(20,10,$key->jk,1,0,'C');
$this->fpdf->Cell(27,10,tgl_indo($key->tgl_bergabung),1,0,'C');
$this->fpdf->Cell(20,10,$key->nama_jabatan,1,0,'C');
$this->fpdf->Cell(10,10,$key->gol_jabatan,1,0,'C');
$this->fpdf->Cell(20,10,$key->pendidikan,1,0,'C');
 
$this->fpdf->Cell(20,10,$key->no_hp,1,0,'C');
$this->fpdf->Cell(25,10,$key->email,1,0,'C');
$this->fpdf->Cell(20,10,$key->status,1,0,'C');
  $no++;
  $this->fpdf->Ln();
}

     $this->fpdf->Output('hello_world.pdf','I');
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */