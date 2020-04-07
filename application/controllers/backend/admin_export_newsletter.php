<?php


// SA MARCHE MAIS CEST CHELOU  A REGARDER + TARD

Class admin_export_newsletter extends CI_Controller {


  function _remap($PARAMETRE_NEWS) {
         $this->index($PARAMETRE_NEWS);
     }



public function index($PARAMETRE_NEWS)
{

  $Mon_Tableau = explode("-",$PARAMETRE_NEWS);
  // BIEN S'Assurer que ce sont des données INT à insérer
  $valeur1 = intval($Mon_Tableau[0]);
  $valeur2 = intval($Mon_Tableau[1]);
  $valeur3 = intval($Mon_Tableau[2]);

  //EXPORTER MAIL TO TEXTE
  $valeur_final = "";
  $this->load->model('newsletter_model');

  $afficher_mail = $this->newsletter_model->afficher_les_emails($valeur1,$valeur2,$valeur3);
 foreach($afficher_mail as $row)
 {
   $valeur_final = $valeur_final . $row->email . ";"."\n";

 }

$nom_fichier = random_nom_fichier('.csv');


// EXPORTATION
exporter_vers_fichier_texte($valeur_final,$nom_fichier);


}

}

?>
