
<?php
if (isset($this->session->userdata['isConnected'])) {
$password = ($this->session->userdata['isConnected']['password']);
$email = ($this->session->userdata['isConnected']['email']);
$client_id = ($this->session->userdata['isConnected']['client_id']);
$nom = ($this->session->userdata['isConnected']['nom']);
$prenom = ($this->session->userdata['isConnected']['prenom']);
$id = ($this->session->userdata['isConnected']['id']);
$client_id = ($this->session->userdata['isConnected']['client_id']);



$isItAdmin = isIt_Admin_or_Client($client_id);


} else {


header("Location: ".site_link_base('login'));
exit; // Toujours mieux de stopper la suite du script si non autoriser. le header est censé rediriger correctement.
}
?>

<div class="container">

<div class="row ">
