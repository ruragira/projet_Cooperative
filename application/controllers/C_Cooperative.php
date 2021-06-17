<?php

class C_Cooperative  extends CI_Controller
{

     public function index(){
        $this->load->model('MCooperative');
        $data = array();
        $data['cooperatve'] = $this->MCooperative->all('cooperatve');
    
        $this->load->view('VAffichechage_participant');
       
    }

public function affich(){
   
   $row= $this->MCooperative->getRead();
     echo json_encode($row);
}




?>