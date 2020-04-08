
<?php
if (isset($this->session->userdata['isConnected'])) {

//header("location: http://localhost/projet3/backend/login/");
}
?>



<div id="main">


  <div id="login" class="form">

      <div class="titre_login"><h3>Accès à votre espace client</h3></div>
      <?php echo form_open('backend/login/connexion'); ?>

    <div class="padding">
    <form class="login-form">
      <input type="text" name="email" id="email" placeholder="E-MAIL" class="login_input_style" />

      <input type="password" name="password" id="password" placeholder="MOT DE PASSE" class="login_input_style"/>  </div>
      <div class="padding2">
      <button type="submit" value="Se connecter" name="submit">Se connecter</button>  </div>
      <?php
      if (isset($deconnexion_message)) {
      echo "<div class='valide_message'>";
      echo $deconnexion_message;
      echo "</div>";
      }


      echo "<div class='erreur_message'>";

      if (isset($erreur_message)) {
      echo $erreur_message;
      }
      echo validation_errors();
      echo "</div>";

      ?>

      <div class="padding3"><p class="message"><a href="#">Mot de passe oublié ? </a></p></div>
      <?php echo form_close(); ?>
    </form>

</div>

</div>
