<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="rdv.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title></title>
</head>
<body>

<?php
		include 'header.php';
	?>

	


          <!-- menu -->
          <div class="container">
	<div class="demande"><h5>DEMANDE DE FORMATION</h5></div>
	
         <div class="row">
    <div class="rendezVous1">
      <h2>Qui êtes vous ? </h2>
      <div class="row" >
      	<div class="col-md-3" id="checked">
				      		<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Particulier
				  </label>
				</div>
      	</div>
      	<div class="col-md-3" id="checked">
      		 		<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Entreprise
				  </label>
				</div>
      	</div>
      	<div class="col-md-3">
      		 		<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Collectivité
				  </label>
				</div>
      	</div>
      	<div class="col-md-3">
      		 		<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> E. Public
				  </label>
				</div>
      	</div>
      	
      </div><br>
      
      
      
      
      <h2>Quel type de droit concerne votre demande ?</h2>
      <div class="row" >
      	<div class="col-md-3" id="checked">
				      		<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Droit privé
				  </label>
				</div>
      	</div>
      	<div class="col-md-3" id="checked">
      		 		<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Droit des affaires
				  </label>
				</div>
      	</div>
      	<div class="col-md-3" id="checked">
      		 		<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Droit pénal
				  </label>
				</div>
      	</div>
      	<div class="col-md-3" id="checked">
      		 		<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Droit public
				  </label>
				</div>
      	</div>
      	
      </div><br>
      <h2>Quel type de rendez vous souhaitez vous ?</span></h2>
      <div class="row">
        <div class="col-md-6" id="checked">
        	<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Téléphone
				  </label>
				</div>
        </div>
        <div class="col-md-6" id="checked">
        	<div class="btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
				    <input type="checkbox" checked> Cabinet
				  </label>
				</div>
        </div>
      </div> <br>
      
      <h2>Choisissez votre date de rendez vous <span class="glyphicon glyphicon-menu-down"></span></h2> 
      <div class=" calendrier">
        <iframe name="InlineFrame1" id="InlineFrame1" style="width:180px;height:220px;" src="https://www.mathieuweb.fr/calendrier/calendrier-des-semaines.php?nb_mois=1&nb_mois_ligne=4&mois=&an=&langue=fr&texte_color=B9CBDD&week_color=DAE9F8&week_end_color=C7DAED&police_color=453413&sel=true" scrolling="no" frameborder="0" allowtransparency="true"></iframe>  
      </div>
      <h2>Vos informations<span class="glyphicon glyphicon-menu-down"></span></h2> 
      <form class="formperso">
          <input type="text" name="nom" placeholder="Nom" class="formperso3">
          <input type="text" name="prenom" placeholder="Prenom" class="formperso3">
          <input type="tel" name="telephone" placeholder="Télephone"  class="formperso4">
          <input type="email" name="email" placeholder="Adresse email" class="formperso4">
          <input type="text" name="adresse" placeholder="Adresse postale" class="formperso4">
          <input type="text" name="nom" placeholder="Code postale"class="formperso3">
          <input type="text" name="prenom" placeholder="Ville" class="formperso3">
      </form><br>
      
      <div class="row">
           	<div class="col-md-12">
           	<form class="tArea">
  <div class="mb-3">
    
    <textarea class="form-control" id="" placeholder="Posez vos questions" ></textarea>
    
  </div>

           	</div>
           </div>
           
           	  <div class="buto">
           	  	<button type="button" class="btn btn-info" id="conct">VALIDER</button>
           	  </div>
    </div> 
    
  </div> 
  






	        </div><br>
       


<?php
		include 'footer.php';
	?>























	</div>










<script src="script.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>