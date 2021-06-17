
         

<div class="container">
    
    <div class="row ">
        <div class="col-lg-2"></div>
            <div class="col-lg-10">
            <div class="card-header ">
                        <h3>Liste des participant</h3>
                    </div>
        <div class="text-center mb-3 col-md-3">
        <a href="#" class="fa fa-plus  btn btn-success "> Affichage </a>
        </div>
                <div class="card">
                    
           
                        <div class="card-body">
           
                        <div class="table-responsive">
    
                        <table  id="example1" class="table table-bordered table-striped">

 <?php echo $this->session->flashdata('message') ?>
 <tr class="bg-secondary text-center">
  
   <th><label>Nom </label></th>
   <th><label>Prenom </label></th>
   <th><label>Adresse </label></th>
   <th><label>Niveau_etude </label></th>
   <th><label>Faculte </label></th>
   <th><label>Nom du cooperative </label></th>
   <th><label>Objectif du cooperative </label></th>
   <th><label>Nbre du service </label></th>
   <th><label>Adresse du cooperative </label></th>
   <th><label>Titre du cooperative </label></th>
   <th><label>Besoin d'apprendre </label></th>
   <th><label>Attente </label></th>
   <th><label>Module du propose </label></th>
   <th><label>Explique_motivation </label></th>
   
  
  
 </tr>

 <?php foreach ($cooperatves as $cooperative):
  
    $donne=array('id_coop' =>$cooperative['id_coop'] );
    $cooperatve=$this->projet->affich('cooperatve');

    $data=array('id_coop'=>$MCooperative['id_coop'] );
    $cooperatve=$this->MCooperative->getRead('cooperatve',$data);
  ?>
   <tr>
   <td><?=$cooperatve['id_coop'] ?></td>
     <td><?=$cooperatve['nom'] ?></td>
     <td><?=$cooperatve['prenom'] ?></td>
     <td><?=$cooperatve['adresse'] ?></td>
    <td><?=$cooperatve['niveau_etude'] ?></td>
    <td><?=$cooperatve['faculte'] ?></td>
    <td><?=$cooperatve['nom_coop'] ?></td>
    <td><?=$cooperatve['objectif_coop'] ?></td>
    <td><?=$cooperatve['nbre_pers'] ?></td>
    <td><?=$cooperatve['adresse_coop'] ?></td>
    <td><?=$cooperatve['titre_coop'] ?></td>
    <td><?=$cooperatve['besoin_apprendre'] ?></td>
    <td><?=$cooperatve['attente'] ?></td>
    
    <td><?=$cooperatve['module_propose'] ?></td>
    
    <td><?=$cooperatve['explique_motivation'] ?></td>

  



     <td>
     <a href=" #" class="glyphicon glyphicon-edit btn btn-primary" >Edit</a>
         <a href="#>" class="btn btn-danger form-inline" >Delete</a>
     </td>
   </tr>
<?php endforeach;?>
</table>
    </div>
                         </div>
                    </div>
                </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    
      </div>
        </div> 
    
                         </div>
                    </div>
                </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    
      </div>
        </div> 
    
                         </div>
                    </div>
                </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    
      </div>
        </div> 
    
    
    
    
    