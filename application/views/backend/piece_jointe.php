
<div class="col-md-9">

<?php



       foreach($piece_jointe as $row)
       {
$id_specific = html_escape($row->id);
$piece_lien = html_escape($row->piece_lien);
$id_dossier = html_escape($row->id_dossier);


?>


<form <?php echo form_open('backend/login/show_dossier/'.$id_dossier); ?>
<div class="form-group">
        <div class="row"><div class="col-md-6">

          <input type="hidden" name="id_piece" value="<?php echo $id_specific; ?>"> </input>
          <input type="hidden" name="id_dossier" value="<?php echo $id_dossier; ?>"> </input>
          <input type="hidden" name="piece_lien" value="<?php echo $piece_lien; ?>"> </input>
          <a  class="btn btn-primary" href="<?php echo site_link_base('upload/').$piece_lien;?>"><?php echo $piece_lien;?></a>

          <button type="submit" class="btn btn-primary">[X] Supprimer</button>
      </div></div>



<?php

echo "<br>";


        ?>
      <?php
       }



 ?>
</div>
