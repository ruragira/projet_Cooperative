<div class="container">
    <div class="row">
      <div class="col-lg-10">
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
 
   $donne=array('id_coop' =>$cooperative->id_coop );

 ?>
  <tr>
    <td><?=$cooperative->nom ?></td>
    <td><?=$cooperative->prenom ?></td>
    <td><?=$cooperative->adresse ?></td>
   <td><?=$cooperative->niveau_etude ?></td>
   <td><?=$cooperative->faculte ?></td>
   <td><?=$cooperative->nom_coop ?></td>
   <td><?=$cooperative->objectif_coop ?></td>
   <td><?=$cooperative->nbre_pers ?></td>
   <td><?=$cooperative->adresse_coop ?></td>
   <td><?=$cooperative->titre_coop ?></td>
   <td><?=$cooperative->besoin_apprendre ?></td>
   <td><?=$cooperative->attente ?></td>
   
   <td><?=$cooperative->module_propose ?></td>
   
   <td><?=$cooperative->explique_motivation ?></td>

 
  </tr>
<?php endforeach;?>
</table>
      </div>
      <div class="col-lg-1"></div>
    </div>
</div>