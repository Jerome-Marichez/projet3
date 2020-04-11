<?php echo $id ?>

<?php echo form_open_multipart("backend/login/upload/show_dossier/".$id);?>

<input type="file" name="monfichier" size="20" />

<input type="hidden" name="id" value="<?php echo $id?>" size="20" />
<br /><br />

<input type="submit" value="upload" />

</form>
