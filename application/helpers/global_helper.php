<?php
// Des fonction en vracs qui peuvent etre utile dans plein de petit contexte


// EXPORTER UN FICHIER TEXTE DEPUIS UN STRING
function exporter_vers_fichier_texte($notre_texte,$nom_fichier)
{

  header('Content-type: text/plain');


  header('Content-Disposition: attachment; filename="'.$nom_fichier.'"');

  print($notre_texte);


}

// GENERER UN NOM DE FICHIER ALEATOIRE AVEC SON EXTENSION EN PARAMETRE (ex: .TXT,.JPG,.PNG)
function random_nom_fichier($extension_file)
{
  $nom_fichier = "Fichier_";
  $random_nom_fichier = hash('sha512', session_id().microtime($nom_fichier)); // On hash ce même nom pour le rendre unique.
  $nom_du_fichier_final = $nom_fichier.$random_nom_fichier . $extension_file; // On crée le nom du fichier avec l'extension
  return $nom_du_fichier_final;
}



// ENCRYPTER UNE DONNEE
function encrypt($value,$key)
{
  $plaintext = $value;
  $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
  $iv = openssl_random_pseudo_bytes($ivlen);
  $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
  $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
  $ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );

return $ciphertext;
}



// DECRYPTER UNE DONNEE
function decrypt($value,$key)
{
  $c = base64_decode($value);
  $ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
  $iv = substr($c, 0, $ivlen);
  $hmac = substr($c, $ivlen, $sha2len=32);
  $ciphertext_raw = substr($c, $ivlen+$sha2len);
  $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
  $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
  if (hash_equals($hmac, $calcmac))//PHP 5.6+ timing attack safe comparison
  {
      return $original_plaintext;
  }
}



?>
