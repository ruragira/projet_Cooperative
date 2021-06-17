<?php

class C_Cooperative  extends CI_Controller
{
  public function __construct()
	{
		parent::__construct (); 
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('upload');
        $this->load->library('session');
        $this->load->model('MCooperative');
		//$this->load->model('application/models/personnes');
        
        
        
	}
    
     public function index(){
        /*$this->load->model('MCooperative');
        $data = array();
        $data['cooperatve'] = $this->MCooperative->all('cooperatve');
        $this->load->view('VAffichechage_participant');*/
       
    }

public function affich(){
   
/*$row= $this->MCooperative->getRead();
     echo json_encode($row);*/
}
public function index_form()
{
  $this->load->view('header');
  $this->load->view('formulaire');
  $this->load->view('footer');
}
public function Add()
{
  $this->form_validation->set_rules('nom','nom','required'); 
  $this-> form_validation->set_rules('prenom' ,'prenom' ,'required');
  $this-> form_validation->set_rules('adresse' ,'adresse' ,'required');
  $this->form_validation->set_rules('niveau','niveau','required'); 
  $this-> form_validation->set_rules('faculte' ,'faculte' ,'required');
  $this-> form_validation->set_rules('nom_coop' ,'nom_coop' ,'required');
  $this->form_validation->set_rules('nbre_coop','nbre_coop','required'); 
  $this-> form_validation->set_rules('adresse_coop' ,'adresse_coop' ,'required');
  $this-> form_validation->set_rules('titre_coop' ,'titre_coop' ,'required');
  $this->form_validation->set_rules('obj_coop','obj_coop','required'); 
  $this-> form_validation->set_rules('mo_coop' ,'mo_coop' ,'required');
  $this-> form_validation->set_rules('b_coop' ,'b_coop' ,'required');
  $this-> form_validation->set_rules('att_coop' ,'att_coop' ,'required');
  $this-> form_validation->set_rules('pro_coop' ,'pro_coop' ,'required');

  if ($this->form_validation->run()===false) {
    
  }else {
    $nom=$this->input->post('nom');
    $prenom=$this->input->post('prenom');
    $adresse=$this->input->post('adresse');
    $niveau=$this->input->post('niveau');
    $faculte=$this->input->post('faculte');
    $nom_coop=$this->input->post('nom_coop');
    $nbre_coop=$this->input->post('nbre_coop');
    $adresse_coop=$this->input->post('adresse_coop');
    $titre_coop=$this->input->post('titre_coop');
    $obj_coop=$this->input->post('obj_coop');
    $mo_coop=$this->input->post('mo_coop');
    $b_coop=$this->input->post('b_coop');
    $att_coop=$this->input->post('att_coop');
    $pro_coop=$this->input->post('pro_coop');

  $data=array(
  'nom'=>$nom,
  'prenom'=>$prenom,
  'adresse'=>$adresse,
  'niveau_etude'=>$niveau,
  'faculte'=>$faculte,
  'nom_coop'=>$nom_coop,
  'objectif_coop'=>$obj_coop,
  'nbre_pers'=>$nbre_coop,
  'adresse_coop'=>$adresse_coop,
  'titre_coop'=>$titre_coop,
  'besoin_apprendre'=>$b_coop,
  'attente'=>$att_coop,
  'module_propose'=>$pro_coop,
  'explique_motivation'=>$mo_coop
);
                                  if($data!=null){
                                  if($this->MCooperative->add_p($data))
                                  {
                                          
                                  }
                                  }


  }
}




}




?>