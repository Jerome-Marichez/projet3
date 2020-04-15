<?php
if (isset($this->session->userdata['isConnected'])) {

// FIXED
$nom = ($this->session->userdata['isConnected']['nom']);
$prenom = ($this->session->userdata['isConnected']['prenom']);
$isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);




} else {


header("Location: ".site_link_base('login'));
exit; // Toujours mieux de stopper la suite du script si non autoriser. le header est censé rediriger correctement.
}
?>

  <div class="col-md-3  blue_menu">
    <div class="col-md-12 lightgray">
      <ul class="nav nav-pills nav-stacked ">

        <li class="padding"><a id="connexion" href="connexion" class="blue_lien_profile"><i class="fa fa-user-circle fa-1x"></i> <?php echo texte_responsive($prenom,$nom,14) ?> </a></li>

<?php if ($isItAdmin == "admin")
{ ?>
      <!--  <li><a href="#" class="blue_lien">Accueil</a></li>-->
        <li><a id="admin_dossier" href="<?php  echo site_url('backend/login/admin_dossiers');?>" class="blue_lien">Mes dossiers <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="rendezvous_formation" href="<?php  echo site_url('backend/login/rendezvous_formation');?>" class="blue_lien">Formation <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="rendezvous" href="<?php  echo site_url('backend/login/rendezvous');?>"  class="blue_lien">Rendez-vous <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_newsletter" href="<?php  echo site_url('backend/login/admin_newsletter');?>" class="blue_lien">Newsletter <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_clients" href="<?php  echo site_url('backend/login/admin_clients');?>"  class="blue_lien">Clients <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="parametre" href="<?php  echo site_url('backend/login/parametre');?>"  class="blue_lien">Paramètres <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="deconnexion" href="<?php  echo site_url('backend/login/deconnexion');?>" class="blue_lien">Déconnecter <i class="fa fa-chevron-right fa-1x"></i></a></li>


<?php } else { ?>

  <li><a id="admin_dossier" href="<?php  echo site_url('backend/login/client_dossiers');?>" class="blue_lien">Mes dossiers <i class="fa fa-chevron-right fa-1x"></i></a></li>
  <li><a id="rendezvous_formation" href="<?php  echo site_url('backend/login/rendezvous_formation');?>" class="blue_lien">Formation <i class="fa fa-chevron-right fa-1x"></i></a></li>
  <li><a id="rendezvous" href="<?php  echo site_url('backend/login/rendezvous');?>"  class="blue_lien">Rendez-vous <i class="fa fa-chevron-right fa-1x"></i></a></li>
  <li><a id="parametre" href="<?php  echo site_url('backend/login/parametre');?>"  class="blue_lien">Paramètres <i class="fa fa-chevron-right fa-1x"></i></a></li>
  <li><a id="deconnexion" href="<?php  echo site_url('backend/login/deconnexion');?>" class="blue_lien">Déconnecter <i class="fa fa-chevron-right fa-1x"></i></a></li>

<?php } ?>

      </ul>
    </div>
  </div>
