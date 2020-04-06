<html>
<?php
if (isset($this->session->userdata['isConnected'])) {
$password = ($this->session->userdata['isConnected']['password']);
$email = ($this->session->userdata['isConnected']['email']);
$client_id = ($this->session->userdata['isConnected']['client_id']);
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
<!-- POUR UN ADMIN -->
<b id="admin_accueil"><a href="admin_accueil">Accueil</a></b>

<b id="admin_mesdossiers"><a href="admin_mesdossiers">Mes dossiers</a></b>

<b id="admin_formation"><a href="admin_formation">Formation</a></b>

<b id="admin_rendezvous"><a href="admin_rendezvous">Rendez-vous</a></b>

<b id="admin_newsletter"><a href="admin_newsletter">Newsletter</a></b>

<b id="admin_clients"><a href="admin_clients">Clients</a></b>

<b id="admin_parametre"><a href="admin_parametre">Paramètres</a></b>

<b id="deconnexion"><a href="deconnexion">Déconnecter</a></b>
<!-- Pour un client -->

<b id=""> <a href=""> </a> </b>

</div>
<br/>
</body>
</html>
