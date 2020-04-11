<?php

foreach($tableau_dossier as $row)
{

  $id_specific = html_escape($row->id);
  $number_dossier = html_escape($row->number_dossier);
  $email_dossier = html_escape($row->email);
  $statut = html_escape($row->statut);
?>

<div class="col-md-9">
    <form <?php echo form_open('backend/login/show_dossier/'.$id_specific); ?>
    <input  type="hidden" name="changer_statut_dossier" value="1">    </input>
    <input  type="hidden" name="id_specific" value="<?php echo $id_specific;?>">    </input>
    <input  type="hidden" name="number_dossier" value="<?php echo $number_dossier;?>">    </input>
    <input  type="hidden" name="email_dossier" value="<?php echo $email_dossier;?>">    </input>
    <input  type="hidden" name="statut" value="<?php echo $statut;?>">    </input>


    <button type="submit" name="submit" value="en-attente" class="btn btn-danger">Dossier statut en attente</button>
    <button type="submit" name="submit" value="piece" class="btn btn-warning">Dossier statut en attente de pièce jointe</button>
    <button type="submit" name="submit" value="valide" class="btn btn-success">Dossier statut valide</button>
  <?php echo form_close(); ?></form>


</div>


<?php
}
 ?>
