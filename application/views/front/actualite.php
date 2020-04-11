<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="authoring-tool" content="Adobe_Animate_CC">
	<link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="actualite.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title></title>
</head>
<body onload="init();">
    <?php
		include 'header.php';
	?>

	



               <div class="container">
	 
				<div class="demande"><h5>Actualités</h5></div>
										<br>
					<div class="row">
						<div class="col-md-5">
									<HR color="#0f02bc" width="100%" size="5px"  />	
						</div>
						<div class="col-md-2" style="text-align: center; color: #0000a0;" >
							<i class="far fa-newspaper"></i>
						</div>
				          <div class="col-md-5">
									<HR color="#0f02bc" width="100%" size="5px"  />	
						</div>
					</div>
					          <br>


					          		
				 	<h6 style="text-align: center">Infos Covid-19</h6>
				 	<div class="info">
				 		<a href="https://www.who.int/fr">Information sur le Covid-19</a>
				 	</div>
		          <div class="actualite row">
		          	<div class="col-sm-12">
		          		<a href=""></a>
		        <!--  		<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item active" aria-current="page"></li>
						  </ol>
						</nav>-->
		          	</div>
		          </div> <br><br><br>
          		<div class="row" >
					<div class="actualite col-sm-4 col-md-4">
						<div class="actualite1">
							<img src="images/actualite1.jpg"><br><br>
							<strong>Accenderat super his incitatum</strong><br><br>
							<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
						</div>						
					</div>
						
					<div class="actualite col-sm-4 col-md-4">
						<div class="actualite1">
							<img src="images/actualite2.jpg"><br><br>
							<strong>Accenderat super his incitatum</strong><br><br>
							<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
						</div>				
					</div>

					<div class="actualite col-sm-4 col-md-4">
						<div class="actualite1">
							<img src="images/actualite3.jpg"><br><br>
							<strong>Accenderat super his incitatum</strong><br><br>
							<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
						</div>
					</div>
				</div><br>
				<div class="row" >
					<div class="actualite col-sm-4 col-md-4">
						<div class="actualite1">
							<img src="images/actualite1.jpg"><br><br>
							<strong>Accenderat super his incitatum</strong><br><br>
							<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
						</div>						
					</div>
									
					<div class="actualite col-sm-4 col-md-4">
						<div class="actualite1">
							<img src="images/actualite2.jpg"><br><br>
							<strong>Accenderat super his incitatum</strong><br><br>
							<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
						</div>				
					</div>

					<div class="actualite col-sm-4 col-md-4">
						<div class="actualite1">
							<img src="images/actualite3.jpg"><br><br>
							<strong>Accenderat super his incitatum</strong><br><br>
							<p>Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. </p>
						</div>
					</div>
				</div><br>
									                            <nav aria-label="Page navigation example">
					  <ul class="pagination justify-content-center">
					  	<a class="page-link" href="#"><i class="fas fa-less-than"></i></a>
					    <li class="page-item"><a class="page-link" href="#">1</a></li>
					    <li class="page-item"><a class="page-link" href="#">2</a></li>
					    <li class="page-item"><a class="page-link" href="#">3</a></li>
					    <li class="page-item">
					      <a class="page-link" href="#"><i class="fas fa-greater-than"></i></a>
					    </li>
					  </ul>
					</nav><br><br>


         		<div class="demande"><h5>Newsletters</h5></div><br><br>
                 <div class="row">
						<div class="col-md-5">
									<HR color="#0f02bc" width="100%" size="5px"  />	
						</div>
						<div class="col-md-2" style="text-align: center; color: #0000a0;" >
							<i class="far fa-newspaper"></i>
						</div>
				          <div class="col-md-5">
									<HR color="#0f02bc" width="100%" size="5px"  />	
						</div>
					</div>
					          <br><br>
					          <div class="row">
					          	<div class="col-md-6">
					          		<script>
var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
function init() {
	canvas = document.getElementById("canvas");
	anim_container = document.getElementById("animation_container");
	dom_overlay_container = document.getElementById("dom_overlay_container");
	var comp=AdobeAn.getComposition("BC2E83E7FDE24C74A870EDD0A4195014");
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
	exportRoot = new lib.newspapers();
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
					          	<div class="actuBas col-md-6">
					          		<div class="row">
					          			<div class="actualite3 col-md-12">
					          				<p >Pour plus d'actualités,<br>abonnez vous</p>
					          			</div>
					          		</div><br>
					          		<div class="row">
					          			<div class="actualite3 col-md-6">
					          					<input type="checkbox" name="">
					                       <a href="newletterDroitPena">Droit Pénal</a><br>
					                      &nbsp; <input type="checkbox" name="">
										<a href="newletterDroitPena">Droit Public</a>
					          			</div>
					          			<div class="actualite3 col-md-6">
					          				&nbsp;&nbsp;&nbsp;<input type="checkbox" name="">
										<a href="newletterDroitPena">Droit Privé</a><br>
										<input type="checkbox" name="">
					                 <a href="newletterDroitPena">Les Trois</a>
					          			</div>
					          		</div><br>
					          		<div class="row">
					          			<div class="actualite3 col-md-12">
					          				<form method="" action="">
				<input type="email" name="email" placeholder="adresse mail" style="border:1px solid #0f02bc;">
				<input type="submit" name="submit" value="Valider"style="background-color: #0f02bc;margin: 0;color: #fff;">
			</form>
					          			</div>
					          		</div>




					          	</div>
					          </div> <br><br>
         		
	    </div>
		<?php
		include 'footer.php';
	?>


















<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="newspapers.js"></script>
<script src="script.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>