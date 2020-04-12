<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="assets/css/fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/Dformation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title></title>
</head>
<body>



        <div class="container-fluid">
		<nav class="navbar">

				<div class="reso">

	           <i class="fab fa-youtube"></i>&nbsp;&nbsp;
	           <i class="fab fa-linkedin"></i>&nbsp;&nbsp;
	           <i class="fab fa-facebook-square"></i>&nbsp;&nbsp;
	           <i class="fas fa-rss-square"></i>&nbsp;&nbsp;
	        </div>
	        <!-- <div class="row">
	        	<div class="numero">
					<h8>+33 04 78 78 78</h8>

				</div>
				<div class="adresse">
					<h9 >agdavocats@contact.fr</h9>
				</div>
	        </div> -->

				<nav class="navbar navbar-expand-lg">
					<div class="numero">
					<h8>+33 04 78 78 78</h8>

				</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<div class="adresse">
					<h9 >agdavocats@contact.fr</h9>
				</div>

 				 </nav>
					<div class="user">
						<i class="fas fa-user-circle"></i>
					</div>

	        </nav>
	        <div class="container">
	        	<div class="row">
       	<div class="col-md-12" id="log">
		<img src="assets/images/logo-bleu.png">

	</div>

       </div><br><br>

</div>
</div>
<div class="container">
	<?php

	  $this->load->view('front/menu_front');
	 ?><br><br>



 <div class="container">
	<div class="demande"><h5>DEMANDE DE FORMATION</h5></div>

	    <form method="" action="">
	    	<div class=" devis row">
				<div class="col-md-12">
                       <button type="button" class="btn btn btn-lg btn-block">Vous êtes ?</button>
				</div>
			</div><br>

			<div class="devis  row">
				<div  class="col-md-4">
				    <div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Entreprise" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>

				<div  class="col-md-4">
				    <div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Collectivité territotiale" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>

				<div  class="col-md-4">
				    <div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Etablissement public" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>
			</div>
			<div class="devis row">
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Denomination sociale" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Siret" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>
			</div>
			<div class="devis row">
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Nom" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Prenom" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>
			</div>

			<div class="devis row">
				<div class="col-md-12">
         			<div class="input-group mb-3">
  						<input type="text" class="form-control" placeholder="Telephone" aria-label="Recipient's username" aria-describedby="basic-addon2" required="number">
					</div>
				</div>
			</div>

			<div class="devis row">
				<div class="col-md-12">
         			<div class="input-group mb-3">
  						<input type="text" class="form-control" placeholder="Adresse email" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>
			</div>

			<div class="devis row">
				<div class="col-md-12">
         			<div class="input-group mb-3">
  						<input type="text" class="form-control" placeholder="Adresse postale" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>
			</div>

			<div class="devis row">
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Code postal" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Ville" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>
			</div>

			<div class=" devis row">
				<div class="col-md-12">
                     <button type="button" class="btn btn btn-lg btn-block">Lieu de la Formation</button>
                </div>
			</div><br>

			<div class="devis row">
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Cabinet" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Sur votre lieu de travail" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>
			</div>

			<div class=" devis row">
				<div class="col-md-12">
					<input type="text" class="form-control" placeholder="Nombre de personne presentes" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
				</div>
			</div><br>

            <div class="devis1 row">
				<div class="col-md-1">
			        <div class="input-group mb-3">
			  			<input type="number" class="form-control" placeholder="" style="background-color:
			  			#e7eaed; width: 100px; height: 50px; margin-left: 500px;" >
					</div>
				</div>
			</div>


			<div class=" devis row">
				<div class="col-md-12">
                    <button type="button" class="btn btn btn-lg btn-block">Demande de formation</button>
                </div>
			</div><br>

			<div class="devis row">
				<div class="col-md-6">
					<div class="input-group mb-3">
	                       <input type="text" class="form-control" placeholder="Selon vos besoins" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>

				<div class="col-md-6">
					<div class="input-group mb-3">
	                       <input type="text" class="form-control" placeholder="Les marchés publics" aria-label="Recipient's username" aria-describedby="basic-addon2" required="text">
					</div>
				</div>
			</div>

			<div class=" devis row">
				<div class="col-md-12">
                    <button type="button" class="btn btn btn-lg btn-block">Calendrier</button>
				</div>
			</div><br>

			<div class=" devis2 row">
				<div class="col-md-12" id="imgBut">
					<iframe name="InlineFrame1" id="InlineFrame1" style="width:180px;height:220px;" src="https://www.mathieuweb.fr/calendrier/calendrier-des-semaines.php?nb_mois=1&nb_mois_ligne=4&mois=&an=&langue=fr&texte_color=B9CBDD&week_color=DAE9F8&week_end_color=C7DAED&police_color=453413&sel=true" scrolling="no" frameborder="0" allowtransparency="true"></iframe><br>
					<input type="submit" class="form-control" placeholder="Valider" aria-label="Recipient's username" aria-describedby="basic-addon2" style="background-color: #0f02bc;">
				</div>
			</div>
	    </form>


		<br>



</div>

<div class="container-fluid">
<footer>
	<style type="text/css">
		footer{
          background-color: #0f02bc;
	color: white;
	margin-top: 10px;
	padding-top: 10px;
	padding-bottom: 5px;
	font-size: 20px;
	text-align: center;
		}
		footer a{
	color:#fff;
	font-size: 10px;
	margin-left: 8px;
	display: inline;
	border-right: 2px solid #fff;
}
	</style>
	<div class="container-fluid">
		<div class="row" >
			<div class="actualite col-sm-4 col-md-4">
				<div class="footer1">
					<p>AGDZ avocats <br>Marseille dans le quartier préfecture<br>+33 64 48 48 48<br>cabinet@agdzavocat.com<br>recrutement@agdzavocats.com</p>
					<i class="fab fa-youtube"></i>&nbsp;&nbsp;
	           <i class="fab fa-linkedin"></i>&nbsp;&nbsp;
	           <i class="fab fa-facebook-square"></i>&nbsp;&nbsp;
	           <i class="fas fa-rss-square"></i>&nbsp;&nbsp;

				</div>
			</div>

			<div class="actualite col-sm-4 col-md-4">
				<div class="footer2">
					<img src="assets/images/logo-blanc.png" alt="le logo"/>

				</div>
			</div>

			<div class="actualite col-sm-4 col-md-4">
				<div class="carte">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.065686218915!2d5.373373515122521!3d43.29194607913538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c0b84d3dad0b%3A0xa6fdfda4628c186e!2s64%20Rue%20Grignan%2C%2013001%20Marseille!5e0!3m2!1sfr!2sfr!4v1585918260796!5m2!1sfr!2sfr" width="300" height="225" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

				</div>
			</div>
			<div class="actualite col-sm-12 col-md-12">
				<a href="condition">Conditions générales de service &nbsp;</a>
				<a href="condition">&nbsp;Tous droit de service&nbsp; </a>
				<a href="condition">&nbsp;Mentions légales &nbsp;</a>
				<a href="condition">&nbsp;FAQ&nbsp; </a>
				<a href="condition">&nbsp;Plan de site&nbsp;</a>


			</div>
		</div>
	</div>
</footer>


	</div>








<script src="script.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
