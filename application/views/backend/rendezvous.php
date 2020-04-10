

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Rendez-vous  </p></div></div>
    <div class="col-md-2">  <div class="titre_menu_admin"></div></div>
  </div>






  <div class="espace_backend_60"> </div>



<!-- CARTE RENDEZ VOUS -->



<?php


$isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
foreach($tableau_rendezvous as $row)
{

$id_specific = html_escape($row->id);
$client_ID = html_escape($row->client_id);
$nom_tableau = html_escape($row->nom);
$prenom_tableau = html_escape($row->prenom);
$tel_tableau = html_escape($row->tel);
$email_tableau = html_escape($row->email);
$code_postale_tableau = html_escape($row->code_postale);
$ville_tableau = html_escape($row->ville);
$adresse_tableau = html_escape($row->adresse);
$date_tableau = html_escape($row->date);
$cabinet = html_escape($row->cabinet);
$statut = html_escape($row->statut);
if ($cabinet == 1) { $cabinet = "Cabinet"; } else { $cabinet = "Téléphone"; }
?>
<div class="row ">
    <div class="col-md-6 text-center">
      <div class="card_rendezvous">
      <div class="card-body">


        <h5 class="card-ligne1-rendezvous"> <i class="fa fa-calendar-check fa-2x" ></i><?php echo date_formater($date_tableau,'d-m-Y'); ?><i class="fa fa-clock fa-2x" style="padding-left: 50px"></i><?php echo date_formater($date_tableau,'H'); echo "h"; echo date_formater($date_tableau,'i');  ?></div>
        <p class="card-ligne2-rendezvous"><p><?php echo $cabinet ?></p>
          <p class="card-ligne2-rendezvous"><b><?php echo $nom_tableau.' '.$prenom_tableau; ?></b></p>

      </div>
    </div>

    <div class="espace_backend_30"></div>
    <div class="espace_backend_30_for_mobile_only"></div>
    <?php if ($statut == 'en-attente' )
    { ?>

        <!-- Les differents ID relatif au formulaire -->
        <form <?php echo form_open('backend/login/action_rendezvous'); ?>
        <input id="id" name="id" type="hidden" value="<?php echo $id_specific;?>">
        <input id="email" name="email" type="hidden" value="<?php echo $email_tableau;?>">
        <input id="client_id" name="client_id" type="hidden" value="<?php echo $client_ID;?>">
        <input id="nom" name="nom" type="hidden" value="<?php echo $nom_tableau;?>">
        <input id="prenom" name="prenom" type="hidden" value="<?php echo $prenom_tableau;?>">
        <input id="tel" name="tel" type="hidden" value="<?php echo $tel_tableau;?>">
        <input id="code_postale" name="code_postale" type="hidden" value="<?php echo $code_postale_tableau;?>">
        <input id="ville" name="ville" type="hidden" value="<?php echo $ville_tableau;?>">
        <input id="adresse" name="adresse" type="hidden" value="<?php echo $adresse_tableau;?>">

        <input id="date_tableau" name="date_tableau" type="hidden" value="<?php echo $date_tableau;?>">

        <?php if ( $isItAdmin =="admin") { ?>
        <div class="col-md-3 text-center">  <button type="submit" name="action" value="accepter" class="btn btn-primary btn-lg btn-block " ><b>Accepter </b></button></div>

        <div class="espace_backend_30_for_mobile_only"></div>


        <div class="col-md-3 text-center">  <button type="submit" name="action" value="refuser"   class="btn btn-primary btn-lg btn-block " ><b>Refuser </b></button></div>
    <?php  } else  { ?>     <div class="col-md-6 text-center">  <a href="#"  class="btn btn-primary btn-lg btn-block " ><b>En attente de confirmation </b></a></div>
        <?php echo form_close(); ?>
    <?php }}
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
