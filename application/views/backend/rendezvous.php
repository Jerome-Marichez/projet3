

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Rendez-vous  </p></div></div>
    <div class="col-md-2">  <div class="titre_menu_admin"></div></div>
  </div>






  <div class="espace_backend_60"> </div>



<!-- CARTE RENDEZ VOUS -->



<?php



foreach($tableau_rendezvous as $row)
{
$id_specific = html_escape($row->id);
$nom_tableau = html_escape($row->nom);
$prenom_tableau = html_escape($row->prenom);
$email_tableau = html_escape($row->email);
$date_tableau = html_escape($row->date);
$client_ID_tableau = html_escape($row->client_id);
$cabinet = html_escape($row->cabinet);
$statut = html_escape($row->statut);
if ($cabinet == 1) { $cabinet = "Cabinet"; } else { $cabinet = "Téléphone"; }
?>
<div class="row ">
    <div class="col-md-6 text-center">
      <div class="card_rendezvous">
      <div class="card-body">


        <h5 class="card-ligne1-rendezvous"> <i class="fa fa-calendar-check fa-2x" ></i><?php echo $date_tableau ?><i class="fa fa-clock fa-2x" style="padding-left: 50px"></i>9h30</div>
        <p class="card-ligne2-rendezvous"><p><?php echo $cabinet ?></p>
          <p class="card-ligne2-rendezvous"><b><?php echo $nom_tableau.' '.$prenom_tableau; ?></b></p>

      </div>
    </div>

    <div class="espace_backend_30"></div>
    <div class="espace_backend_30_for_mobile_only"></div>
    <?php if ($statut == 'en-attente')
    { ?>
      <div class="col-md-3 text-center">  <a href="#"  class="btn btn-primary btn-lg btn-block " ><b>Accepter </b></a></div>
        <div class="espace_backend_30_for_mobile_only"></div>
          <div class="col-md-3 text-center">   <a href="#" class="btn btn-primary btn-lg btn-block " ><b>Refusez </b></a> </div>
    <?php }
    else
    { ?>
          <div class="col-md-6 text-center">  <a href="#"  class="btn btn-primary btn-lg btn-block " ><b>Rendez vous accepté </b></a></div>
    <?php }
    ?>
        <div class="col-md-6 text-center" style="padding-top: 20px">  <a href="#" class="btn btn-primary btn-lg btn-block" ><b>Déplacer </b></a>
      </div>



</div>
<div class="espace_backend_30"> </div>
<?php }


?>




<!-- FIN CARTE RENDEZ VOUS -->




</div>







    <div class="espace_backend_30"> </div>
