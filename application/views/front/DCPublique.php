<!DOCTYPE html>
<html>
<?php

  $this->load->view('front/head_front');
 ?>
<body>

	<div class="container">
		<nav class="navbar">

			<div class="reso">
	           <i class="fab fa-youtube"></i>&nbsp;&nbsp;
	           <i class="fab fa-linkedin"></i>&nbsp;&nbsp;
	           <i class="fab fa-facebook-square"></i>&nbsp;&nbsp;
	           <i class="fas fa-rss-square"></i>&nbsp;&nbsp;
	        </div>
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
	    <!--    <div class="container">-->
	        <div class="row">
		       	<div class="col-md-12" id="log">
				<img src="<?php echo site_link_base("img_front");?>/logo-bleu.png">
				</div>

       		</div><br><br>


<!--<div class="container">-->
<?php

	$this->load->view('front/menu_front');
 ?>
 <br><br>


<!--	 <div class="container">-->
	<div class="demande"><h5>Droit de la commande publique</h5></div><br>
	           <div class="row">
	           	<div class="col-md-12" id="video">
	           		<iframe  width="425" height="344" src="https://www.youtube.com/embed/N4koEPJ0bjU" frameborder="0" allowfullscreen></iframe>
	           	</div>
	           </div><br>
	           <div class="row">
	           	  <div class="col-md-12">
						           	  	Ce fichier est un exemple d'amélioration de l'esthétique de Bootstrap, il n'est pas utile pour son fonctionnement. Si
					vous observez l'apparence des composants de Bootstrap, vous allez constater qu'ils sont « plats », sans aucun relief.
					Dans la version 2, ce n'était pas le cas. Pour des raisons de performances, il a été décidé d'offrir cette amélioration
					visuelle dans un fichier séparé. Si vous avez la curiosité de regarder ce fichier, vous verrez qu'il contient des
					définitions de dégradés et d'ombrages. Vous trouvez le résultat de l'application de ce thème sur cette page
					d'exemple. Nous reparlerons de ce fichier dans le chapitre concernant la configuration de Bootstrap.
				   </div>
	           </div><br>
              <div class="row" id="celine">
              	<div class="col-md-4" ><br>
              		<img src="<?php echo site_link_base("img_front");?>/celia.jpg"><br>
              		<span>Celine Gundouz</span><br>
              		<span>Avocate en droit publique</span>
              	</div>
              	<div class="col-md-8">
              		<span>Ce cachier est un exemple d'amélioration de l'esthétique de Bootstrap, il n'est pas utile pour son fonctionnement. Si
					vous observez l'apparence des composants de Bootstrap, vous allez constater qu'ils sont « plats », sans aucun relief.
					Dans la version 2, ce n'était pas le cas. Pour des raisons de performances, il a été décidé d'offrir cette amélioration
					visuelle dans un fichier séparé. Si vous avez la curiosité de regarder ce fichier, vous verrez qu'il contient des
					définitions de dégradés et d'ombrages. Vous trouvez le résultat de l'application de ce thème sur cette page
					d'exemple. Nous reparlerons de ce 􀁽chier dans le chapitre concernant la configuration de Bootstrap.</span><br>
					<form method="" action="">

						<button type="button" class="btn btn-light" >Demandez votre devis</button>
					</form>

              	</div>
              </div>
	        </div>

</div><br>
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
					<img src="<?php echo site_link_base("img_front");?>/logo-blanc.png" alt="le logo"/>

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
