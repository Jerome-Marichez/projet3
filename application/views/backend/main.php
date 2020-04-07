<html>
<?php
if (isset($this->session->userdata['isConnected'])) {
$password = ($this->session->userdata['isConnected']['password']);
$email = ($this->session->userdata['isConnected']['email']);
$client_id = ($this->session->userdata['isConnected']['client_id']);
$nom = ($this->session->userdata['isConnected']['client_id']);
$prenom = ($this->session->userdata['isConnected']['client_id']);
$id = ($this->session->userdata['isConnected']['client_id']);
} else {
header("location: login");
}
?>
<head>
<title>Admin Page</title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="profile">
<?php
echo "Bonjour <b id='welcome'><i>" . $email . "</i> !</b>";
echo "<br/>";
echo "<br/>";
echo "Voila le Admin Page";
echo "<br/>";
echo "<br/>";
echo "Votre compte client: " . $client_id;
echo "<br/>";
echo "Votre email est: " . $email;
echo "<br/>";

?>
</div>

<!-- POUR UN ADMIN -->
<b id="admin_mesdossiers" class="menulien_backend"><a href="admin_mesdossiers">Mes dossiers</a></b>

<b id="admin_formation" class="menulien_backend"><a href="admin_formation">Formation</a></b>

<b id="admin_rendezvous" class="menulien_backend"><a href="admin_rendezvous">Rendez-vous</a></b>

<b id="admin_newsletter"  class="menulien_backend"><a href="admin_newsletter">Newsletter</a></b>

<b id="admin_clients"  class="menulien_backend"><a href="admin_clients">Clients</a></b>

<b id="admin_parametre"  class="menulien_backend"><a href="admin_parametre">Paramètres </a></b>

<b id="deconnexion"  class="menulien_backend"><a href="deconnexion">Déconnecter</a></b>
<!-- Pour un client -->

<b id=""> <a href=""> </a> </b>

<div class="container">

<div class="row ">
  <div class="col-md-3  blue_menu">
    <div class="col-md-12 lightgray">
      <ul class="nav nav-pills nav-stacked ">

        <li class="padding"><a id="index" href="index" class="blue_lien_profile"><i class="fa fa-user-circle fa-1x"></i> Léa AMIC</a></li>

      <!--  <li><a href="#" class="blue_lien">Accueil</a></li>-->
        <li><a id="admin_dossier" href="admin_rendezvous" class="blue_lien">Mes dossiers <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_formation" href="admin_formation" class="blue_lien">Formation <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_rendezvvous" href="admin_rendezvvous"  class="blue_lien">Rendez-vous <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_newsletter" href="admin_newsletter" class="blue_lien">Newsletter <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_clients" href="admin_clients"  class="blue_lien">Clients <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="admin_parametre" href="admin_parametre"  class="blue_lien">Paramètres <i class="fa fa-chevron-right fa-1x"></i></a></li>
        <li><a id="deconnexion" href="deconnexion" class="blue_lien">Déconnecter <i class="fa fa-chevron-right fa-1x"></i></a></li>
      </ul>
    </div>
  </div>
  <div class="col-md-9">










    <div class="row lightgray">
      <div class="col-md-10">  <div class="titre_menu_admin"><p> Mes Clients  </p></div></div>
      <div class="col-md-2">  <div class="titre_menu_admin"> <i class="fa fa-plus-circle fa-2x"></i></div></div>
    </div>



    <div class="espace_titre_menu_admin"> </div>


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
         <tr class="supprimer_ligne_tableau_tr">
           <td class="col-md-1 supprimer_ligne_tableau_td"><i class="fa fa-trash fa-2x"></i>  </td>
           <td>John</td>
           <td>Doe</td>
           <td>john@example.com</td>
           <td>john@example.com</td>
         </tr>
         <tr class="supprimer_ligne_tableau_tr">
           <td class="supprimer_ligne_tableau_td"> <i class="fa fa-trash fa-2x"></i></td>
           <td>Mary</td>
           <td>Moe</td>
           <td>mary@example.com</td>
            <td>john@example.com</td>
         </tr>
         <tr class="supprimer_ligne_tableau_tr">
           <td class="supprimer_ligne_tableau_td"><i class="fa fa-trash fa-2x"></i> </td>
           <td>July</td>
           <td>Dooley</td>
           <td>july@example.com</td>
           <td>john@example.com</td>
         </tr>
         <tr class="supprimer_ligne_tableau_tr">
           <td class="supprimer_ligne_tableau_td"><i class="fa fa-trash fa-2x"></i> </td>
           <td>July</td>
           <td>Dooley</td>
           <td>july@example.com</td>
           <td>john@example.com</td>
         </tr>
       </tbody>
     </table>







  </div>

  <div class="clearfix visible-lg"></div>
</div>

</div>
</body>
</html>
