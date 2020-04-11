<?php



function retourner_statut_icon($string)

  // NECESSITE FONT AWESOME CHARGER POUR FONCTIONER
{
   switch($string){

   case "en-attente":
   $string = '<i class="fas fa-history 2x"></i>';
   break;

   case "valide":
   $string = '<i class="fas fa-check 2x"></i>';
   break;

   case "piece":
   $string = '<i class="fas fa-exclamation-triangle"></i>';
   break;

   default:
   $string = '<i class="fas fa-history"></i>';


    }

  return $string;
}



?>
