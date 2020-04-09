<?php


var_dump($_SESSION);

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="fr">
	<head>
		<title>Mon  site</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/projet3/application/assets/css/styles.css">
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script> <!-- Charger la librairie CHART JS -->
		<script src="<?php echo site_link_base("js");?>cree_graphique.js"> </script> <!-- charger notre fonction utilisant CHART JS -->
    <script src="https://kit.fontawesome.com/35388eb05f.js" crossorigin="anonymous"></script>
	</head>
<body>
