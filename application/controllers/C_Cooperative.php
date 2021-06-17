<?php

class C_Cooperative  extends CI_Controller
{

     public function index(){
        $this->load->model('MCooperative');
        //$data = array();
       $data['cooperatves'] = $this->MCooperative->load_all_DB('cooperatve');
    
        $this->load->view('VAffichechage_participant',$data);
       
    }

public function affich(){
   
 
  
}


}

?>