<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="DCLigne.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title></title>
</head>
<body>


	<br>

		<?php
		include 'header.php';
	?>

          <!-- menu -->
	 <div class="container">
	<div class="demande"><h5>Demande de consultation en ligne</h5></div>
<br>

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

	       
	        </div>
	</div>
	
















	        </div>
       


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