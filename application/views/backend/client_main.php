

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Accueil  </p></div></div>
    <div class="col-md-2">  <div class="titre_menu_admin"></div></div>
  </div>






  <div class="espace_backend_60"> </div>




  <div class="row">
    <div class="col-md-4">
      <div class="card " style="width: 18rem;">
        <div class="lightgraycard"><i class="fa fa-users fa-5x"></i><div class="counter1"><?php  echo $stat1; ?></div></div>

        <div class="card-body">
          <p class="card_blue_text">Clients</p>
        </div>
      </div>
    </div>



    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="lightgraycard"><i class="fa fa-folder-open fa-5x"></i><div class="counter1">50</div></div>
        <div class="card-body">
          <p class="card_blue_text">Dossiers en cours</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="lightgraycard"><i class="fa fa-archive fa-5x"></i><div class="counter1">50</div></div>
        <div class="card-body">
          <p class="card_blue_text">Dossiers classés</p>
        </div>
      </div>
    </div>
  </div>

<canvas id="AdminGraph"></canvas>
<script>cree_tableau_js(<?php  echo $stat1; ?>,30,30);</script>







</div>
