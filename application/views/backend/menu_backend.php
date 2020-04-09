<html>
<?php
if (isset($this->session->userdata['isConnected'])) {
$password = ($this->session->userdata['isConnected']['password']);
$email = ($this->session->userdata['isConnected']['email']);
$client_id = ($this->session->userdata['isConnected']['client_id']);
$nom = ($this->session->userdata['isConnected']['nom']);
$prenom = ($this->session->userdata['isConnected']['prenom']);
$id = ($this->session->userdata['isConnected']['id']);
} else {
header("location: login");
}
?>




<div class="container">

<div class="row ">
  <div class="col-md-3  blue_menu">
    <div class="col-md-12 lightgray">
      <ul class="nav nav-pills nav-stacked ">

        <li class="padding"><a id="index" href="index" class="blue_lien_profile"><i class="fa fa-user-circle fa-1x"></i> <?php echo $prenom.' '.$nom; ?> </a></li>

      <!--  <li><a href="#" class="blue_lien">Accueil</a></li>-->
        <li><a id="admin_dossier" href="admin_dossiers" class="blue_lien">Mes dossiers <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_formation" href="admin_formation" class="blue_lien">Formation <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_rendezvvous" href="admin_rendezvous"  class="blue_lien">Rendez-vous <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_newsletter" href="admin_newsletter" class="blue_lien">Newsletter <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_clients" href="admin_clients"  class="blue_lien">Clients <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_parametre" href="admin_parametre"  class="blue_lien">Paramètres <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="deconnexion" href="deconnexion" class="blue_lien">Déconnecter <i class="fa fa-chevron-right fa-1x"></i></a></li>
      </ul>
    </div>
  </div>
