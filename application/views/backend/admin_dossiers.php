

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Mes Dossiers  </p></div></div>
    <div class="col-md-2">  <div class="titre_menu_admin"> <a id="ajouter_dossier"   data-toggle="modal" data-target="#creationdossier_fenetre"><i class="fa fa-plus-circle fa-2x"></i></a></div></div>
  </div>





  <div class="modal fade" id="creationdossier_fenetre" tabindex="-1" role="dialog" aria-labelledby="creationdossier_fenetre" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <?php echo form_open('backend/login/ajouter_dossier'); ?>

        <div class="modal-header">
          <h5 class="modal-title" id="creationclient_fenetre">Création Dossier</h5>
        
        </div>
        <div class="modal-body">





              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email du compte client à associé au dossier" required>
              </div>




              <button type="submit" class="btn btn-primary">Enregistrer</button>


        </div>




<?php echo form_close(); ?>


      </div>
    </div>
  </div>



  <div class="espace_backend_30"> </div>


      <?php
      if (isset($valide_message)) {
      echo "<div class='alert alert-success' role='alert'>";
      echo $valide_message;
      echo "</div>";
      echo '<div class="espace_backend_30"> </div>';
      }
      ?>
      <?php

      if (isset($erreur_message)) {
        echo "<div class='alert alert-danger' role='alert'>";

      echo $erreur_message;
      echo validation_errors();
      echo "</div>";
      echo '<div class="espace_backend_30"> </div>';
      }

      ?>

  <table class="table table-striped ">
     <thead>
       <tr class="haut_du_tableau_tr">
         <th class="haut_du_tableau_th"> </th>
         <th>N° de dossier</th>
         <th>Client</th>

         <th>Statut du dossier</th>

         <th></th>

       </tr>

     </thead>

     <tbody>








       <?php



       foreach($tableau_dossier as $row)
       {
$id_specific = html_escape($row->id);
$number_dossier = html_escape($row->number_dossier);
$email_dossier = html_escape($row->email);
$statut = html_escape($row->statut);
      ?>    <tr class="supprimer_ligne_tableau_tr">   <td class="col-md-1 supprimer_ligne_tableau_td"><a href="./admin_dossiers/<?php echo $id_specific; ?> "> <i class="fa fa-trash fa-2x"></i></a>   </td>

<?php
echo '<td>'.$number_dossier.'</td>';
echo '<td>'.$email_dossier.'</td>';
echo ' <td >'; echo retourner_statut_icon($statut); echo '</i></td>';
echo '<td><a href="./show_dossier/'.$id_specific.'"</a><i class="fas fa-chevron-right fa-2x">'.'</td>';

echo  '</tr>';
        ?>
      <?php
       }
?>






     </tbody>
   </table>







</div>
