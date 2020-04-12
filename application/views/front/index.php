<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="<?php echo site_link_base("css_front");?>fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="<?php echo site_link_base("css_front");?>index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>A.G.D.Z - Home</title>
</head>
<body>



          <!-- menu -->
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
		<img src="<?php echo site_link_base("img_front");?>logo-bleu.png">

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




    <div class="container">


	 <div class="row">
	 	<div class="col-md-6">
	 		<h5>Le Cabinet</h5><br>
	 		<h6>*Une équipe pluridisciplinaire*</h6><br>

	 		<p>Une page web contient du texte et des images, mais aussi un certain nombre d'éléments très fréquents : listes,
tableaux, formulaires, icônes, boutons. Créer une harmonie dans la présentation de tous ces éléments n'est pas une
tâche aisée.
Nous allons voir comment Bootstrap permet de créer un rendu visuel cohérent pour que tous ces éléments
cohabitent de façon esthétique. Une page web contient du texte et des images, mais aussi un certain nombre d'éléments très fréquents : listes,
tableaux, formulaires, icônes, boutons. Créer une harmonie dans la présentation de tous ces éléments n'est pas une
tâche aisée.
Nous allons voir comment Bootstrap permet de créer un rendu visuel cohérent pour que tous ces éléments
cohabitent de façon esthétique.</p>
 <div class="but2">

 	<button type="button" class="btn btn-light">EN SAVOIR PLUS</button>
 	<button type="button" class="btn btn-dark" id="conct">CONTACT</button>
 </div>
	 	</div><br>
	 	<div class="col-md-6" id="carou">
	 		<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <img src="<?php echo site_link_base("img_front");?>actualite1.jpg" class="d-block w-100" alt="actualite1">
    </div>
    <div class="carousel-item" data-interval="2000">
      <img src="<?php echo site_link_base("img_front");?>actualite2.jpg" class="d-block w-100" alt="actualite2">
    </div>
    <div class="carousel-item">
      <img src="<?php echo site_link_base("img_front");?>actualite3.jpg" class="d-block w-100" alt="actualite3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	 	</div>
	 </div><br>
	 <div class="row">
	 	<div class="col-md-12">
	 		<h5>EXPERTISE</h5>
	 		<p>Quis enim aut eum diligat quem metuat, aut eum a quo se metui putet? Coluntur tamen simulatione dumtaxat ad tempus. Quod si forte, ut fit plerumque, ceciderunt, tum intellegitur quam fuerint inopes amicorum. Quod Tarquinium dixisse ferunt, tum exsulantem se intellexisse quos fidos amicos habuisset, quos infidos, cum iam neutris gratiam referre posse</p>

	 	</div>
	 </div>
	 <br>
	 <div class="row">
	 	<div class="col-sm-4 col-md-4"><img src="<?php echo site_link_base("img_front");?>imageDroitPublic.jpg"><div class="texte_centrer">DROIT PUBLIC</div></div>
	 	<div class="col-sm-4 col-md-4"><img src="<?php echo site_link_base("img_front");?>imageDroitPenal.jpg"><div class="texte_centrer">DROIT PENAL</div></div>
	 	<div class="col-sm-4 col-md-4"><img src="<?php echo site_link_base("img_front");?>imageDroitPrive.jpg"><div class="texte_centrer">DROIT PRIVE ET DES AFFAIRES</div></div>
	 </div><br>
	 <div class="row">
		<div class="col-md-12" id="suite">
			<i class="far fa-file" style="position: relative; top: 5px;"></i>
			<button type="button" class="btn btn-primary">DEMANDEZ VOTRE DEVIS</button>
 			<button type="button" class="btn btn-primary" id="conct">PRENDRE RENDEZ VOUS</button>
			<i class="far fa-calendar-alt" style="position: relative; top: 5px; left: 20px;"></i>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12" id="form"> <br>
			<h6 class="pform">FORMATION &nbsp;<i class="fas fa-graduation-cap"></i> </h6>
			<p class="pform">Quis enim aut eum diligat quem metuat, aut eum a quo se metui putet? Coluntur tamen simulatione dumtaxat ad tempus. Quod si forte, ut fit plerumque, ceciderunt, tum intellegitur quam fuerint inopes amicorum. Quod Tarquinium dixisse ferunt, tum exsulantem se intellexisse quos fidos amicos habuisset, quos infidos, cum iam neutris gratiam referre posse. Quis enim aut eum diligat quem metuat, aut eum a quo se metui putet? Coluntur tamen simulatione dumtaxat ad tempus. Quod si forte, ut fit plerumque, ceciderunt, tum intellegitur quam fuerint inopes amicorum. Quod Tarquinium dixisse ferunt, tum exsulantem se intellexisse quos fidos amicos habuisset, quos infidos, cum iam neutris gratiam referre posse
			</p>
			<div class="fobut">
			<button type="button" class="btn btn-light">En savoir plus</button>
			<button type="button" class="btn btn-dark">S'inscrire</button>
		</div>
		</div>

	</div><br>
	<h2>Actualités</h2>
	<br>
	<div class="row" >
		<div class="actualite col-sm-4 col-md-4">
			<div class="actualite1">
				<img src="<?php echo site_link_base("img_front");?>actualite1.jpg">
				<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
			</div>
		</div>

		<div class="actualite col-sm-4 col-md-4">
			<div class="actualite1">
				<img src="<?php echo site_link_base("img_front");?>actualite2.jpg">
				<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
			</div>
		</div>

		<div class="actualite col-sm-4 col-md-4">
			<div class="actualite1">
				<img src="<?php echo site_link_base("img_front");?>actualite3.jpg">
				<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class=" col-md-12">
					<HR color="#0f02bc" width="100%" size="5px"  />
		</div>
	</div>
	<div class="row" >
		<div class="actualite3 col-sm-4 col-md-4">
			<p >Pour plus d'actualités,<br>abonnez vous</p>
		</div>

		<div class="actualite3 col-sm-4 col-md-4">

		<!--			<span class="glyphicon glyphicon-unchecked" ></span>
					<a href="newletterDroitPena">Droit Pénal</a>

					<span class="glyphicon glyphicon-unchecked" ></span>
					<a href="newletterDroitPena">Droit Privé</a><br>

					<span class="glyphicon glyphicon-unchecked"></span>
					<a href="newletterDroitPena">Droit Public</a>

					<span class="glyphicon glyphicon-unchecked" ></span>
					<a href="newletterDroitPena">Les Trois</a>-->
			         	<div class="row">
			         		<div class="col-md-6">
			         			<input type="checkbox" name="">
					<a href="newletterDroitPena">Droit Pénal</a>
			         		</div>
			         		<div class="col-md-6">
					     &nbsp;&nbsp;	<input type="checkbox" name="">
					<a href="newletterDroitPena">Droit Privé</a>
					     </div>
			         	</div>

				     <div class="row">
				     	<div class="col-md-6">
				     		&nbsp;&nbsp;<input type="checkbox" name="">
					<a href="newletterDroitPena">Droit Public</a>
				     	</div>
				     	<div class="col-md-6">
				     		<input type="checkbox" name="">
					<a href="newletterDroitPena">Les Trois</a>
				     	</div>
				     </div>






		</div>

		<div class="actualite3 col-sm-4 col-md-4">
			<form method="" action="">
				<input type="email" name="email" placeholder="adresse mail" style="border:1px solid #0f02bc;">
				<input type="submit" name="submit" value="Valider"style="background-color: #0f02bc;margin: 0;color: #fff;">
			</form>
		</div>
	</div>
	<div class="row">
		<div class=" col-md-12">
					<HR color="#0f02bc" width="100%" size="5px"  />
		</div>
	</div>
	<div class="row">
		<div class="devis col-md-12">
					<h2 >Demande de devis</h2>
		</div>
	</div>




          <form method="" action="">
      	<div class="row">
		<div class="col-md-6">
			<div class=" devis row">
				<div class="col-md-12">


                       <button type="button" class="btn btn btn-lg btn-block">Vous êtes ?</button>


				</div>
			</div><br>
			<div class=" devis1 row">
				<div class="col-sm-3">
					<button type="button" class="btn btn">Particulier</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn btn">Entreprise</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn btn">Collectivité</button>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn btn">E. Public</button>
				</div>

			</div><br>
			<div class=" devis2 row">
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Nom" aria-label="Recipient's username" aria-describedby="basic-addon2" >

					</div>
				</div>
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Prenom" aria-label="Recipient's username" aria-describedby="basic-addon2">

					</div>
				</div>
			</div>
			<div class="devis2 row">
				<div class="col-md-12">
					<div class="input-group mb-3">
                       <input type="tel" class="form-control" placeholder="Telephone" aria-label="Recipient's username" aria-describedby="basic-addon2">

					</div>
				</div>
			</div>
			<div class="devis2 row">
				<div class="col-md-12">
					<div class="input-group mb-3">
                       <input type="email" class="form-control" placeholder="Adresse mail" aria-label="Recipient's username" aria-describedby="basic-addon2">

					</div>
				</div>
			</div>
			<div class="devis2 row">
				<div class="col-md-12">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Adresse postale" aria-label="Recipient's username" aria-describedby="basic-addon2">

					</div>
				</div>
			</div>
			<div class="devis2 row">
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="number" class="form-control" placeholder="Code postal" aria-label="Recipient's username" aria-describedby="basic-addon2">

					</div>
				</div>
				<div class="col-md-6">
					<div class="input-group mb-3">
                       <input type="text" class="form-control" placeholder="Ville" aria-label="Recipient's username" aria-describedby="basic-addon2">

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p>Une page web contient du texte et des images, mais aussi un certain nombre d'éléments très fréquents : listes,
						tableaux, formulaires, icônes, boutons. Créer une harmonie dans la présentation de tous ces éléments n'est pas une
						tâche aisée.
						Nous allons voir comment Bootstrap permet de créer un rendu visuel cohérent pour que tous ces éléments
						cohabitent de façon esthétique.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-6">
           <div class="row">
           	 <div class="col-md-10">
           	 	<div class="  input-group mb-3">
					  <select class="choix  custom-select" id="inputGroupSelect02">
					    <option selected>Votre demande concerne...</option>
					    <option value="1">Un</option>
					    <option value="2">Deux</option>
					    <option value="3">Trois</option>
					    <option value="3">Quatre</option>
					  </select>

				</div>
           	 </div>
           </div>
           <div class="row">
           	<div class="col-md-12">
           	<form class="tArea">
  <div class="mb-3">

    <textarea class="ask form-control" id="" placeholder="Posez vos questions" ></textarea>

  </div>

           	</div>
           </div>

           	  <div class="buto">
           	  	<button type="button" class="btn btn-dark" id="conct">VALIDER</button>
           	  </div>
           </div>
		</div>
      </form>

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
