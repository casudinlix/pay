<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax_fullcalendar extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if(!$this->input->is_ajax_request()){
			exit('No direct script access allowed :)');
		}
  }

  public function index()
  {

    /*
    * Full calendar ajax load events example
    * Like Pro admin template
    * by Aqvatarius
    */

        $month  = date('m');
        $year   = date('Y');
        $day=date('d');
        $id=$this->uri->segment(3);
        $cek=$this->db->get_where('schedule', array('nip'=>$id))->result();

foreach ($cek as $key ) {
  $data = array();
  $data[] = array('title'=>$key->shift,'start'=>$year.'-'.$month,'className'=>'green');

}

echo json_encode($data);






  }

}

/* End of file Ajax_fullcalendar.php */
/* Location: ./application/controllers/Ajax_fullcalendar.php */
