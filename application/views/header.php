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
    <script src="https://kit.fontawesome.com/35388eb05f.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">


<nav class="navbar navbar-default navbar-top" >
  <div class="container">
    <div class="row">
      <div class="navbar-header col-md-12">
        <ul class="nav navbar-nav ">
          <li><img class="lelogo" src="/projet3/application/assets/images/logo1.jpg" alt="lelogo"/></li>


<!-- CODE MODIFIE -->

          <li><a href="./">Accueil</a></li>
          <li><a href="/projet3/afficher_page/quisommenous"> Qui sommes nous</a></li>
          <li><a href="/projet3/afficher_page/competences">Nos compétences</a></li>
          <li><a href="/projet3/afficher_page/contact">Nous contacter</a></li>

<!-- CODE MODIFIE -->

          <li>
            <div class="dropdown">
              <button type="button" class="btn btn dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-log-in"></span>Connexion
              </button>
              <ul class="dropdown-menu">
                <li></li>
                <li><a href="login">Connectez vous</a></li>
                <li><a href="inscription">Inscrivez vous</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
