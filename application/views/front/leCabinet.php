<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="<?php echo site_link_base("css_front");?>fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo site_link_base("css_front");?>leCabinet.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>A.G.D.Z - Le Cabinet</title>
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
						<a href="<?php echo site_url('/backend/login'); ?>">	<i class="fas fa-user-circle"></i></a>
					</div>

	        </nav>
	        <div class="container">
	        	<div class="row">
       	<div class="col-md-12" id="log">
		  <a href="<?php echo site_url('/'); ?>"><img src="<?php echo site_link_base("img_front");?>logo-bleu.png"></a>

	</div>

       </div><br><br>

</div>
</div>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php   $this->load->view('front/menu_front'); ?>

  </div>
</nav><br><br>





</div>




	 <div class="container">
	<div class="demande"><h5>Le cabinet</h5></div>
            <div class="row">
		<div class="col-md-5">
					<HR color="#0000a0" width="100%" size="5px"  />
		</div>
		<div class="col-md-2" style="text-align: center; color: #0000a0;" >
			<i class="fas fa-landmark"></i>
		</div>
          <div class="col-md-5">
					<HR color="#0000a0" width="100%" size="5px"  />
		</div>
				</div><br>
		<div class="row">
			<div class="col-sm-6" id="img1"><img src="<?php echo site_link_base("img_front");?>formation1.jpg"></div>
			<div class="col-sm-6">
				<h5 class="demande">« Une équipe pluridisciplinaire »</h5><br>
                   <p>Nous avons choisi d’avancer ensemble !<br>
				Nous sommes un cabinet d’avocats convaincus de l’importance d’une réflexion
				collective dans chaque dossier.
				Nous développons nos stratégies dans un esprit ouvert et sensible aux enjeux de nos
				clients.
				Notre philosophie est fondée sur un travail d’équipe pour réaliser une prestation
				rigoureuse et de qualité.
				La diversité et la complémentarité des compétences des avocats du cabinet AARPI
				AGD-Z permettent de proposer des solutions innovantes tant en conseil qu’en
				contentieux.</p>
			</div>

		</div>
		<div class="demande"><h5>L'equipe</h5></div><br>

		   <div class="row">
		<div class="col-md-5">
					<HR color="#0000a0" width="100%" size="5px"  />
		</div>
		<div class="col-md-2" style="text-align: center; color: #0000a0;" >
			<i class="fas fa-user-friends"></i>
		</div>
          <div class="col-md-5">
					<HR color="#0000a0" width="100%" size="5px"  />
		</div>
				</div><br>
		<div class="row">
			<div class="col-md-6" id="img2">
				<img src="<?php echo site_link_base("img_front");?>guendouz.jpg"><br>
				<span>Léa AMIC</span><br>
				<span>Avocate en droit privé</span><br>
				<i class="fas fa-phone"></i>&nbsp; <span>+33 04 78 78 78</span><br>
                <i class="fas fa-envelope"></i>&nbsp;<span>lea.amic@agdz.avocat.com</span><br><br>
                <div class="buto">
           	  	<button type="button" class="btn btn-info" id="conct">LINKEDIN</button>
           	  </div>
			</div>
			<div class="col-md-6" id="img3">
				<div class="demande"><h5>Léa AMIC</h5></div><br>
				<p>avocate en droit privé et des affaires<br>
				A l’issue d’un Master 2 Droit des contrats privés et publics, elle a pu soutenir
				une thèse portant sur « La loyauté dans les relations de travail » le 19 décembre
				2014 et ainsi acquis le grade de Docteur en Droit.
				Maître AMIC a ensuite exercé dans des Cabinets spécialisés, notamment en droit des
				assurances, de la construction et en droit du travail, se forgeant une solide expérience
				dans ces matières.
				Maître Léa AMIC assiste ses clients devant les juridictions civiles, commerciales et
				prud’homales sur l’ensemble du territoire national..</p><br>
                  <div class="demande"><h5>Domaine de compétence</h5></div><br>
                  <p>– Droit des personnes er de la famille <br>
					– Droit de l’immobilier<br>
					– Droit du travail<br>
					– Droit commercial et des sociétés.</p><br>
			</div>
		</div><br><br><br><br>




		<div class="row">
			<div class="col-md-6" id="img2">
				<img src="<?php echo site_link_base("img_front");?>celia.jpg"><br>
				<span>Célié GUNDOUZ</span><br>
				<span>Avocate en droit public</span><br>
				<i class="fas fa-phone"></i>&nbsp; <span>+33 04 78 78 78</span><br>
                <i class="fas fa-envelope"></i>&nbsp;<span>celia.gundegouz@agdz.avocat.com</span><br><br>
                <div class="buto">
           	  	<button type="button" class="btn btn-info" id="conct">LINKEDIN</button>
           	  </div>
			</div>
			<div class="col-md-6" id="img3">
				<div class="demande"><h5>Celia GUNDEGOUZ</h5></div><br>
				<p>avocate en droit pénal et public
					Avocat au Barreau de Marseille, Maître Célia GUENDOUZ défend vos intérêts en droit
					pénal et en droit public.
					Après avoir obtenu un Master I en Droit public et un MasterII Pratique des droits
					fondamentaux, elle a prêté serment en janvier 2017. Maître Célia GUENDOUZ exerce
					aujourd’hui avec rapidité et efficacité.</p><br>
                  <div class="demande"><h5>Domaine de compétence</h5></div><br>
                  <p>- Les atteintes à la personne humaine<br>
						- Les crimes et délits contre les biens<br>
						– Les infractions au droit routier</p><br>
			</div>
		</div>
   <div class="demande"><h5>Honoraire</h5></div><br>
   <div class="row">
		<div class="col-md-5">
					<HR color="#0000a0" width="100%" size="5px"  />
		</div>
		<div class="col-md-2" style="text-align: center; color: #0000a0;" >
			<i class="fas fa-business-time"></i>
		</div>
          <div class="col-md-5">
					<HR color="#0000a0" width="100%" size="5px"  />
		</div>
				</div><br>
   <div class="row">
   	<p>
   		Conformément aux dispositions de l’article 11.2 « Convention d’honoraires » du
		Règlement Intérieur National de la profession d'avocat :<br>
		- Une convention d’honoraires est conclue avec les clients aux termes de laquelle sont
		précisés le montant ou le mode de détermination des honoraires :<br>
		« Sauf en cas d’urgence ou de force majeure ou lorsqu’il intervient au titre de l’aide
		juridictionnelle totale ou de la troisième partie de la loi n° 91-647 du 10 juillet 1991
		relative à l’aide juridique, l’avocat conclut par écrit avec son client une convention
		d’honoraires, qui précise, notamment, le montant ou le mode de détermination des
		honoraires couvrant les diligences prévisibles, ainsi que les divers frais et débours
		envisagés ».<br>
		- Les honoraires sont déterminés selon les usages, en fonction :<br>
		- de la situation de fortune du client,<br>
		- de la difficulté de l’affaire, des frais exposés par l’avocat,<br>
		- de sa notoriété,<br>
		- et des diligences de celui-ci.<br>
		A noter que : « L’avocat chargé d’un dossier peut demander des honoraires à son
		client même si ce dossier lui est retiré avant sa conclusion, dans la mesure du travail
		accompli ».<br>
		Les éléments de la rémunération comprennent, notamment :<br>
		- le temps consacré à l’affaire,<br>
		- le travail de recherche,<br>
		- la nature et la difficulté de l’affaire,<br>
		- l’importance des intérêts en cause,<br>
		- l’incidence des frais et charges du cabinet,<br>
		- la notoriété, les titres, l’ancienneté, l’expérience et la spécialisation de l’Avocat,<br>
		- les avantages et le résultat obtenus au profit du client ainsi que le service rendu à
		celui-ci,<br>
		– la situation de fortune du client.
   	</p>
   </div>

 </div>

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
					<img src="<?php echo site_link_base("img_front");?>logo-blanc.png" alt="le logo"/>

				</div>
			</div>

			<div class="actualite col-sm-4 col-md-4">
				<div class="carte">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.065686218915!2d5.373373515122521!3d43.29194607913538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c0b84d3dad0b%3A0xa6fdfda4628c186e!2s64%20Rue%20Grignan%2C%2013001%20Marseille!5e0!3m2!1sfr!2sfr!4v1585918260796!5m2!1sfr!2sfr" width="300" height="225" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

				</div>
			</div>
			<div class="actualite col-sm-12 col-md-12">
				<a href="faq">Conditions générales de service &nbsp;</a>
				<a href="faq">&nbsp;Tous droit de service&nbsp; </a>
				<a href="faq">&nbsp;Mentions légales &nbsp;</a>
				<a href="faq">&nbsp;FAQ&nbsp; </a>
				<a href="faq">&nbsp;Plan de site&nbsp;</a>


			</div>
		</div>
	</div>
</footer>


	</div>






<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
