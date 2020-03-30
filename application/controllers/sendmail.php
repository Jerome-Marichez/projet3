<?php
class sendmail extends CI_Controller {


    public function index()
    {

      $this->load->helper('mail');
      $source_origine = array('[NOM]','[PRENOM]','[MESSAGE]');
      $source_modifier = array('MARICHEZ','JEROME','Merci pour votre inscription');
      envoyer_mail("jh15xzcpO9tYH3rv","bienvenue_email.php","CABINET AVOCAT","admin@digitstudio.fr","admin@digitstudio.fr",$source_origine,$source_modifier);

    }



}

?>
