
<div class="col-md-9">

<?php foreach($tableau_dossier as $row)
{

  $id = html_escape($row->id);
  $email = html_escape($row->email);
  $ndossier = html_escape($row->number_dossier);
}

?>
<?php echo form_open_multipart("backend/login/upload/show_dossier/".$id);?>

<input type="file" name="monfichier" size="20" />

<input type="hidden" name="id" value="<?php echo $id?>" />

<input type="hidden" name="email" value="<?php echo $email?>"/>

<input type="hidden" name="ndossier" value="<?php echo $ndossier?>"/>
<br /><br />

<input type="submit" value="upload" />

</form>
</div>
