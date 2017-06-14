
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_gaji extends CI_Model {
	var $table = 'all_view_1';
	var $column_order = array(null,'nip','nama_lengkap','nama_jabatan','gol_jabatan','gapok',null); //set column field database for datatable orderable
	var $column_search = array('nip','nama_lengkap','gol_jabatan'); //set column field database for datatable searchable just firstname , lastname , address are searchable
	var $order = array('nip' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file M_gaji.php */
/* Location: ./application/models/M_gaji.php */