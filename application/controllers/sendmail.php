<?php
class sendmail extends CI_Controller {


///////////////////////// CODE A PLACER DANS LE CONTROLLER EXPORTER LES MAIL SELECTIONNER //////////////////////////

public function index()


{

  $this->load->helper('global');
echo encrypt("test","45");
echo decrypt("",""); 
}

/// CODE A REPLACER BIEN + TARD ///////////////////////




///////////////////////////////
public function Exporter_Newsletter()


{


    //
    $valeur_final = "";
    $this->load->helper('global');
    $this->load->model('newsletter_model');
    $afficher_mail = $this->newsletter_model->afficher_les_emails(1,1,1);
   foreach($afficher_mail as $row)
   {
     $valeur_final = $valeur_final . $row->email . ";"."\n";

   }

  //echo $valeur_final;

  $nom_fichier = random_nom_fichier('.csv');


  // EXPORTATION
  exporter_vers_fichier_texte($valeur_final,$nom_fichier);


}
////////////////////////////////////////////////////////////////////////////////////
public function TEST2()
{


    // CODE EXEMPLE POUR INSCRIRE UN EMAIL NEWSLETTER MERCI DE BIEN AJOUTER SI POSSIBLE
    // des CHECK au code Securité et également de vérifier de bien passé un numéro INTEGER
    // et non un string


// INSCRIRE UN EMAIL DANS LA BASE DE DONNE MYSQL
    $this->load->model('newsletter_model');
    $this->newsletter_model->inserer_email_newsletter("1d@digitstudio.fr",1,1,1);
}
////////////////////////////////////////////////////////////////////////////////////




///////////////////////// CODE A PLACER DANS LE CONTROLER ////////////////////////////////////////
    public function TEST()
    {
// CODE EXEMPLE POUR ENVOYER UN MAIL VIA LE CONTROLLER
      $this->load->helper('mail');
      $source_origine = array('[NOM]','[PRENOM]','[MESSAGE]');
      $source_modifier = array('MARICHEZ','JEROME','Merci pour votre inscription');
      envoyer_mail("jh15xzcpO9tYH3rv","bienvenue_email.php","CABINET AVOCAT","admin@digitstudio.fr","admin@digitstudio.fr",$source_origine,$source_modifier);
// FIN
    }
//////////////////////////////////////////////////////////////////////////////////////////////////


}

?>
