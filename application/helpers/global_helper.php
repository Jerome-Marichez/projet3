<?php
// Des fonction en vracs qui peuvent etre utile dans plein de petit contexte



function exporter_vers_fichier_texte($notre_texte,$nom_fichier)
{

  header('Content-type: text/plain');


  header('Content-Disposition: attachment; filename="'.$nom_fichier.'"');

  print($notre_texte);


}


function random_nom_fichier($extension_file)
{
  $nom_fichier = "Fichier_";
  $random_nom_fichier = hash('sha512', session_id().microtime($nom_fichier)); // On hash ce même nom pour le rendre unique.
  $nom_du_fichier_final = $nom_fichier.$random_nom_fichier . $extension_file; // On crée le nom du fichier avec l'extension
  return $nom_du_fichier_final;
}




?>
