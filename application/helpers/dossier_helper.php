<?php



function retourner_statut_icon($string)


{
   switch($string){

   case "en-attente":
   $string = '';
   break;

   case "valide":
   $string = '';
   break;

   case "piece":
   $string = '';
   break;

   default:
   $string = "";


    }

  return $string; 
}



?>
