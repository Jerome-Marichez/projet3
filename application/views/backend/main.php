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
<b id="deconnexion"><a href="deconnexion">Déconnexion</a></b>
</div>
<br/>
</body>
</html>
