
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Awal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='ADMIN')
    {
      redirect('home');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='HRD') {
      redirect('hrd');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='ACCOUNTING') {
      redirect('accounting');
    }elseif ($this->session->userdata('login') == TRUE AND $this->session->userdata('level')=='KARYAWAN') {
      redirect('employe');
    }
	}

	public function index()
	{
		$this->load->view('atas');
		$this->load->view('index');
		$this->load->view('bawah');
		
	}
	function about(){
		$this->load->view('atas');
		$this->load->view('about');
	}
	function typo(){
		$this->load->view('atas');
		$this->load->view('typo');
		$this->load->view('bawah');
	}
	function single(){
		$this->load->view('atas');
		$this->load->view('single');
		$this->load->view('bawah');
	}
function galery(){
	$this->load->view('atas');
		$this->load->view('galery');
		$this->load->view('bawah');
}
function contact(){
	$this->load->view('atas');
		$this->load->view('contact');
		$this->load->view('bawah');
}
}

/* End of file Awal.php */
/* Location: ./application/controllers/Awal.php */