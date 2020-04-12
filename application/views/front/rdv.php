<!DOCTYPE html>
<html>
<?php

  $this->load->view('front/head_front');
 ?>
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





</div>




          <!-- menu -->
          <div class="container">
	<div class="demande"><h5>DEMANDE DE FORMATION</h5></div>
	   <form method="" action="">
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
