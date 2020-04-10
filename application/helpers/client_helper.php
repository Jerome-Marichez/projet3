<?php



function autoriser_action($GRADE_USER,$minimum_grade = "client")
{


// Si l'utilisateur n'est pas = CLIENT ou ADMIN selon le parametre  alors erreur_404 (il n'est pas censé etre la)
  if ($GRADE_USER != $minimum_grade)
  {
  show_404();
  exit;
  }




}




// RETOURNE LA DATE ET HEURE COMBINE
function additione_date_heure($date,$heure)
{

}
function isIt_Admin_or_Client($client_id)
{

$returnvalue = "personne";
  if (!empty($client_id))
  {

    if ($client_id == 'SECRETADMIN007')
    {
      $returnvalue = "admin";
    }
    else
    {
      $returnvalue = "client";
    }
  }
return $returnvalue;
}

// GENERE SOIT LE NUMERO DE CLIENT EN FONCTION DU TYPE CLIENT OU SON MOT DE PASSE SI aucun parametre
function generer_numero_client($data = "password")

{
  $valeur_generation_numero = '';

      switch ($data) {
          case "particulier":
          $valeur_generation_numero = 'P'.rand(10000, 90000);
          break;
          case "entreprise":
          $valeur_generation_numero = 'E'.rand(10000, 90000);
          break;
          case "collectivite":
          $valeur_generation_numero = 'C'.rand(10000, 90000);
          break;
          case "etablissement_public":
          $valeur_generation_numero = 'EP'.rand(10000, 90000);
          break;
          default:
          $valeur_generation_numero = rand(10000000000, 90000000000);
          }

return $valeur_generation_numero;

}



?>
