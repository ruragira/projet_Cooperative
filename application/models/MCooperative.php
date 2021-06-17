<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MCooperative extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->library('upload');
	}
	function getRead(){
		$query=$this-> db->query('SELECT* FROM cooperative');
		return $query-> result();
		}


		public function add_p($data)
		{
			return $this->db->insert('cooperatve',$data);
		}
}



?>