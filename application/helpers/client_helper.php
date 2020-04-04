<?php


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
