

<div class="col-md-9">


  <div class="row lightgray">
    <div class="col-md-10">  <div class="titre_menu_admin"><p> Paramètres  </p></div></div>
    <div class="col-md-2">  <div class="titre_menu_admin"> </div></div>
  </div>

  <div class="espace_backend_30"> </div>


  <?php
  if (isset($valide_message)) {
  echo "<div class='alert alert-success' role='alert'>";
  echo $valide_message;
  echo "</div>";
  }
  ?>
  <?php

  if (isset($erreur_message)) {
    echo "<div class='alert alert-danger' role='alert'>";

  echo $erreur_message;
  echo validation_errors();
  echo "</div>";
  }

  ?>

<div class="espace_backend_30"> </div>


<?php echo form_open('backend/login/modifer_password'); ?>
  <div class="form-group row">
    <div class="col-md-4 input-lg"><label class="label_form_modifier_password" for="password">Mot de passe actuel</label></div>
      <div class="col-md-8"><input type="password" class="form-control input-lg" name="password" id="password" placeholder="" required="true"></div>
  </div>

  <div class="form-group row">
    <div class="col-md-4 input-lg"><label class="label_form_modifier_password" for="nouveau_password">Nouveau mot de passe</label></div>
      <div class="col-md-8"><input type="password" class="form-control input-lg" name="nouveau_password" id="nouveau_password" pattern=".{8,}"   required title="8 caractères minimum" placeholder=""></div>

  </div>

  <div class="form-group row">
    <div class="col-md-4 input-lg"><label class="label_form_modifier_password" for="nouveau_password2">Nouveau mot de passe</label></div>
      <div class="col-md-8"><input type="password" class="form-control input-lg" name="nouveau_password2" id="nouveau_password2" pattern=".{8,}"   required title="8 caractères minimum" placeholder=""></div>

  </div>



  <div class="form-group row">
    <div class="col-md-4 input-lg"></div>
      <div class="col-md-8">  <button type="submit" class="btn btn-primary btn-block">Modifier mon mot de passe</button></div>

  </div>
<?php echo form_close(); ?>
</form>
</div>
