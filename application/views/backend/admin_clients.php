

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Mes Clients  </p></div></div>
    <div class="col-md-2">  <div class="titre_menu_admin"> <a id="ajouter_client"   data-toggle="modal" data-target="#creationclient_fenetre"><i class="fa fa-plus-circle fa-2x"></i></a></div></div>
  </div>





  <div class="modal fade" id="creationclient_fenetre" tabindex="-1" role="dialog" aria-labelledby="creationclient_fenetre" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <?php echo form_open('backend/login/ajouter_client'); ?>

        <div class="modal-header">
          <h5 class="modal-title" id="creationclient_fenetre">Création client</h5>

        </div>
        <div class="modal-body">


                  <div class="form-group">
                    <div class="row text-center">

                      <div class="col-md-3"><input type="radio" name="cree_type"  value="particulier">Particulier</input></div>
                      <div class="col-md-3"><input type="radio" name="cree_type" value="entreprise">Entreprise </input></div>
                      <div class="col-md-3"><input type="radio" name="cree_type" value="collectivite" >Collectivite territoriale</input></div>
                      <div class="col-md-3"><input type="radio" name="cree_type" value="etablissement_public" >Etablissement public</input></div>

                    </div>
                  </div>



              <div class="form-group">
                <div class="row"><div class="col-md-6">
                <input type="text" class="form-control" name="cree_nom" id="cree_nom" placeholder="Nom" required>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="cree_prenom" id="cree_prenom"  placeholder="Prenom" required>
              </div> </div>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" name="cree_telephone" id="cree_telephone" placeholder="Telephone" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="cree_email" id="cree_email" placeholder="email" required>
              </div>
              <div class="form-group">

                <input type="text" class="form-control" name="cree_adresse_postal" id="cree_adresse_postal" placeholder="adresse postale" required>
              </div>
              <div class="form-group">
                <div class="row">
                <div class="col-md-6">
                <input type="number" class="form-control" name="cree_code_postal" id="cree_code_postal" placeholder="code postale" required>
              </div>
                <div class="col-md-6">
                <input type="text" class="form-control" name="cree_ville" id="cree_ville" placeholder="ville" required>    </div>
              </div>
            </div>
              <!--<div class="form-group">

                <textarea class="form-control" name="question" id="question" rows="5" placeholder="Posez vos question"></textarea>

              </div>-->



              <button type="submit" class="btn btn-primary">Enregistrer</button>

        </div>




          <?php echo form_close(); ?>


      </div>
    </div>
  </div>



  <div class="espace_backend_30"> </div>


  <table class="table table-striped ">
     <thead>
       <tr class="haut_du_tableau_tr">
         <th class="haut_du_tableau_th"> </th>
         <th>Nom du client</th>
         <th>E-mail</th>
         <th>Date</th>
         <th>N° de compte</th>
       </tr>

     </thead>

     <tbody>
       <?php



       foreach($client as $row)
       {
$id_specific = html_escape($row->id);
$nom_tableau = html_escape($row->nom);
$email_tableau = html_escape($row->email);
$date_tableau = html_escape($row->date);
$client_ID_tableau = html_escape($row->client_id);
      ?>   <tr class="supprimer_ligne_tableau_tr">   <td class="col-md-1 supprimer_ligne_tableau_td"><a href="./client_delete/<?php echo $id_specific; ?> "> <i class="fa fa-trash fa-2x"></i></a>   </td>
<?php
echo '<td><a href="./admin_show_client/'.$id_specific.'"</a>'.$nom_tableau.'</td>';
echo '<td>';echo $email_tableau; echo '</td>';
echo '<td>'; echo $date_tableau; echo '</td>';
echo '<td>';  echo $client_ID_tableau; echo '</td>';
        ?>
      <?php
       }
?>




       </tr>

     </tbody>


   </table>

<?php echo $liens; ?>





</div>
