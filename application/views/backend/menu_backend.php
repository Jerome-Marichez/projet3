<?php
if (isset($this->session->userdata['isConnected'])) {

// FIX Jaime pas trop re assigner des variables utiliser par haut_page_backend il faudrait que je jete un oeil
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

        <li class="padding"><a id="connexion" href="connexion" class="blue_lien_profile"><i class="fa fa-user-circle fa-1x"></i> <?php echo $prenom.' '.$nom; ?> </a></li>

<?php if ($isItAdmin == "admin")
{ ?>
      <!--  <li><a href="#" class="blue_lien">Accueil</a></li>-->
        <li><a id="admin_dossier" href="admin_dossiers" class="blue_lien">Mes dossiers <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_formation" href="admin_formation" class="blue_lien">Formation <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_rendezvvous" href="admin_rendezvous"  class="blue_lien">Rendez-vous <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_newsletter" href="admin_newsletter" class="blue_lien">Newsletter <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_clients" href="admin_clients"  class="blue_lien">Clients <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_parametre" href="admin_parametre"  class="blue_lien">Paramètres <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="deconnexion" href="deconnexion" class="blue_lien">Déconnecter <i class="fa fa-chevron-right fa-1x"></i></a></li>


<?php } else { ?>

  <li><a id="admin_dossier" href="client_dossiers" class="blue_lien">Mes dossiers <i class="fa fa-chevron-right fa-1x"></i></a></li>
  <li><a id="admin_formation" href="client_formation" class="blue_lien">Formation <i class="fa fa-chevron-right fa-1x"></i></a></li>
  <li><a id="admin_rendezvvous" href="client_rendezvous"  class="blue_lien">Rendez-vous <i class="fa fa-chevron-right fa-1x"></i></a></li>
  <li><a id="deconnexion" href="deconnexion" class="blue_lien">Déconnecter <i class="fa fa-chevron-right fa-1x"></i></a></li>

<?php } ?>

      </ul>
    </div>
  </div>
