<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="authoring-tool" content="Adobe_Animate_CC">
	 <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title></title>
</head>
<body onload="init();">



			<?php
		include 'header.php';
	?>

         <div class="container">
          <!-- menu -->


	<div class="demande"><h5>Contact</h5></div>
	   <div class="row">
		<div class="col-md-5">
					<HR color="#0000a0" width="100%" size="5px"  />
		</div>
		<div class="col-md-2" style="text-align: center; color: #0000a0;" >
			<i class="far fa-address-book"></i>
		</div>
          <div class="col-md-5">
					<HR color="#0000a0" width="100%" size="5px"  />
		</div>
	</div>
	       <br>
		<div class="row">
			<div class="col-md-6">
				   <script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("796A1846E5C8427CAFF8F3E2EF91409A");
	var lib=comp.getLibrary();
	var loader = new createjs.LoadQueue(false);
	loader.addEventListener("fileload", function(evt){handleFileLoad(evt,comp)});
	loader.addEventListener("complete", function(evt){handleComplete(evt,comp)});
	var lib=comp.getLibrary();
	loader.loadManifest(lib.properties.manifest);
}
function handleFileLoad(evt, comp) {
	var images=comp.getImages();
	if (evt && (evt.item.type == "image")) { images[evt.item.id] = evt.result; }
}
function handleComplete(evt,comp) {
	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
	var lib=comp.getLibrary();
	var ss=comp.getSpriteSheet();
	var queue = evt.target;
	var ssMetadata = lib.ssMetadata;
	for(i=0; i<ssMetadata.length; i++) {
		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
	}
	exportRoot = new lib.phone();
	stage = new lib.Stage(canvas);
	//Registers the "tick" event listener.
	fnStartAnimation = function() {
		stage.addChild(exportRoot);
		createjs.Ticker.framerate = lib.properties.fps;
		createjs.Ticker.addEventListener("tick", stage);
	}
	//Code to support hidpi screens and responsive scaling.
	AdobeAn.makeResponsive(true,'both',false,1,[canvas,anim_container,dom_overlay_container]);
	AdobeAn.compositionLoaded(lib.properties.id);
	fnStartAnimation();
}
</script>
<div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:506px; height:398px">
		<canvas id="canvas" width="506" height="398" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:506px; height:398px; position: absolute; left: 0px; top: 0px; display: block;">
		</div>
	</div>



			</div>
              <div class="col-md-6">
              	<div class="row">
              		<div class="gadget col-sm-4">
		              	<i class="fas fa-phone"></i><br>
		              	<i class="fas fa-envelope"></i><br>
		              	<i class="fas fa-clock"></i>
              		</div>
              	</div>

              </div>
		</div>
		<br><br>
		<div class="demande"><h5>Formulaire</h5></div><br>
		<br><br>
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
                       <input type="text" class="form-control" placeholder="Nom" aria-label="Recipient's username" aria-describedby="basic-addon2">

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



       <div class="demande"><h5>Rendez-vous</h5></div><br><br>
                 <div class="row">

                 	<div class="col-sm-6">
                 		<div class="input-group mb-3">
					  <select class="custom-select" id="inputGroupSelect02">
					    <option selected>Votre demande concerne...</option>
					    <option value="1">One</option>
					    <option value="2">Two</option>
					    <option value="3">Three</option>
					  </select>

				</div>
                 	</div>
                 	<div class="col-sm-6">
                 		<div class="input-group mb-3">
					  <select class="custom-select" id="inputGroupSelect02">
					    <option selected>Telephone ou cabinet</option>
					    <option value="1">Telephone</option>
					    <option value="2">cabinet</option>

					  </select>

				</div>
                 	</div>
                 </div>
						<br><br>
						<div class="row">
		<div class="col-md-12" id="imgBut">
			<iframe name="InlineFrame1" id="InlineFrame1" style="width:180px;height:220px;" src="https://www.mathieuweb.fr/calendrier/calendrier-des-semaines.php?nb_mois=1&nb_mois_ligne=4&mois=&an=&langue=fr&texte_color=B9CBDD&week_color=DAE9F8&week_end_color=C7DAED&police_color=453413&sel=true" scrolling="no" frameborder="0" allowtransparency="true"></iframe><br>

		</div>

	</div><br><br>
	<div class="demande"><h5>Le cabinet</h5></div><br><br>
     <div class="row">
     	<div class="col-md-12">
     		<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=abidjan+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/draw-radius-circle-map/">Radius map tool</a></iframe></div><br />
     	</div>
     </div><br><br>
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

					<input type="radio" name="">
					<a href="newletterDroitPena">Droit Pénal</a>

					<input type="radio" name="">
					<a href="newletterDroitPena">Droit Privé</a><br>

					<input type="radio" name="">
					<a href="newletterDroitPena">Droit Public</a>

					<input type="radio" name="">
					<a href="newletterDroitPena">Les Trois</a>
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






	        </div>




<?php
		include 'footer.php';
	?>






















	</div>









<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="phone.js"></script>
<script src="script.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
