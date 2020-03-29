<?php
class sendmail extends CI_Controller {


    public function index()
    {

      $this->load->helper('mail');
      envoyer_mail("jh15xzcpO9tYH3rv","bienvenue_email.php","admin@digitstudio.fr","admin@digitstudio.fr");

    }



}

?>
