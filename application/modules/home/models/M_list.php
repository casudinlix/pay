<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_list extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function paging($offset, $search, $num){
    if ($search) {
			$query = $this->db->or_like(array('nip' => $search, 'name' => $search));
		}
		$query = $this->db->count_all_results('join_user');
		if ($search) {
			$query = $this->db->or_like(array('nip' => $search, 'name' =>$search));
		}
		$query = $this->db->get('join_user', $offset, $num);
		return $query->result();

  }
function nip(){
  $h=date('d');
  $b=date('m');
  $y=date('y');
  $create = strtoupper(uniqid(rand(),true));
  //$s='SB.';

  $style = substr($y.$b.$h.$create,0,9);
  return $style;
}
function no(){
  $h=date('d');
  $b=date('m');
  $y=date('y');
  $create = strtoupper(uniqid(rand(),true));
  $s='KAS.';

  $style = substr($y.$b.$h."-".$create,0,9);
  return $style;
}
}
