
         

<div class="container">
    
    <div class="row ">
        <div class="col-lg-2"></div>
            <div class="col-lg-10">
            <div class="card-header ">
                        <h3>Liste des participant</h3>
                    </div>
        <div class="text-center mb-3 col-md-3">
        <a href="#" class="fa fa-plus  btn btn-success "> ggggggggggggg </a>
        </div>
                <div class="card">
                    
           
                        <div class="card-body">
           
                        <div class="table-responsive">
    
                        <table  id="example1" class="table table-bordered table-striped">

<?php echo $this->session->flashdata('message') ?>

 <tr class="bg-secondary text-center">
   <th><label>id_coop </label></th>
   <th><label>nom </label></th>
   <th><label>prenom </label></th>
   <th><label>adresse </label></th>
   <th><label>niveau_etude </label></th>
   <th><label>faculte </label></th>
   <th><label>nom_coop </label></th>
   <th><label>objectif_coop </label></th>
   <th><label>nbre_pers </label></th>
   <th><label>adresse_coop </label></th>
   <th><label>titre_coop </label></th>
   <th><label>besoin_apprendre </label></th>
   <th><label>attente </label></th>
   <th><label>module_propose </label></th>
   <th><label>explique_motivation </label></th>
   
   

  
 </tr>

 <?php foreach ($cooperative as $cooperative):
  
    $donne=array('id_coop' =>$cooperative['id_coop'] );
    $cooperatve=$this->projet->affich('cooperatve',$donne);

   // $data=array('id_emplacement'=>$emplacement_client['id_emplacement'] );
   // $emplacement=$this->M_utilisateur_place_client->GetElement('emplacement',$data);
 
  ?>
   <tr>
   <td><?=$cooperatve['id_coop'] ?></td>
     <td><?=$cooperatve['nom'] ?></td>
     <td><?=$cooperatve['prenom'] ?></td>
     <td><?=$cooperatve['adresse'] ?></td>
    <td><?=$cooperatve['niveau_etude'] ?></td>
    <td><?=$cooperatve['faculte'] ?></td>
    <td><?=$cooperatve[''] ?></td>
    <td><?=$cooperatve[''] ?></td>
    <td><?=$cooperatve[''] ?></td>
    <td><?=$cooperatve[''] ?></td>
    <td><?=$cooperatve[''] ?></td>
    <td><?=$cooperatve[''] ?></td>
    <td><?=$cooperatve[''] ?></td>
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
    
    
    
    
    