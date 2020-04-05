<html>
<?php
if (isset($this->session->userdata['isConnected'])) {

header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>
<head>
<title>Accès à votre espace client</title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if (isset($deconnexion_message)) {
echo "<div class='message'>";
echo $deconnexion_message;
echo "</div>";
}
?>

<div id="main">
<div id="login">
<h2>Accès à votre espace client</h2>
<hr/>
<?php echo form_open('backend/login/connexion'); ?>
<?php
echo "<div class='error_msg'>";

if (isset($erreur_message)) {
echo $erreur_message;
}
echo validation_errors();
echo "</div>";
?>
<label>E-MAIL: </label>
<input type="text" name="email" id="email" placeholder="E-MAIL"/><br /><br />
<label>MOT DE PASSE: </label>
<input type="password" name="password" id="password" placeholder="MOT DE PASSE"/><br/><br />
<input type="submit" value="Se connecter" name="submit"/><br />
<?php echo form_close(); ?>
</div>
</div>
</body>
</html>
