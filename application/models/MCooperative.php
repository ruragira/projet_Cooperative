<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MCooperative extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->library('upload');
}

public function load_all_DB($tbl_name){
	$request = $this->db->get($tbl_name);
	return $request->result();
}

	



		public function add_p($data)
		{
			return $this->db->insert('cooperatve',$data);
		}

}


?>