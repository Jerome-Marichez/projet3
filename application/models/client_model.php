<?php

  // Les Requetes SQL sont de base protéger via Active Directory utilisé par CodeInginiter en librarie sinon on aurait du ou pu les escape
  // via $db->escape() par exemple si on utilise des requetes personalisé
  // Voir lien: https://codeigniter.com/userguide2/database/active_record.html


class client_model extends CI_Model

{



// RECUPERER ET AFFICHER LA BASE DE DONNES DES CLIENTS DE TOUT LES CLIENTS OU DUN ID SPECIFIC OU DUN EMAIL SPECIFIC
  public function afficher_base_client($id =  '',$email ='')
  {

    if ($id != '') {  $requete_resultat = $this->db->where('id',$id);  } else if  ($email != '') { $requete_resultat = $this->db->where('email',$email); }
    $requete_resultat = $this->db->get('client');
    return $requete_resultat->result();
    $this->db->close();

  }

// TODO_AJOUTER VERIFICATION CLIENT DEJA EXISTANT
// CREE UN CLIENT DANS LA BASE DE DONNES
public function cree_client($id = 'NULL',$client_id,$password,$nom,$prenom,$tel,$email,$code_postale,$ville,$adresse)

 {

   $date = date("Y-m-d H:i:s"); // Certain type de date ne sont pas admis dans MYSQL ce format fonctionne en effet si le champ est DATE TIME
   $data = array(
     'id'=>$id,
     'client_id'=> $client_id,
     'password'=>$password,
     'nom'=>$nom,
     'prenom'=>$prenom,
     'tel'=>$tel,
     'email'=>$email,
     'code_postale'=>$code_postale,
     'ville'=>$ville,
     'adresse'=>$adresse,
     'date'=> $date);
   //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
   $this->db->insert('client',$data);

   $this->db->close();
  }


// RETOURNER LE NOMBRE DE CLIENT
public function count_client()
{

    $requete_resultat = $this->db->get('client');
    $combien = $requete_resultat->num_rows();
    return $combien;
}

// Verifier si un email existe dans la table client
public function check_email_account($email)
{
  $requete_resultat = $this->db->where('email',$email);
  $requete_resultat = $this->db->get('client');
  $combien = $requete_resultat->num_rows();
  if ($combien > 0){
       return true;
   }
   else{
       return false;
   }
}

public function update_client_password($id,$password)
{

  $data = array(
               'id' => $id,
               'password' => $password,
            );

$requete_resultat = $this->db->where('id', $id);
$requete_resultat = $this->db->update('client', $data);

return $requete_resultat;
$this->db->close();
}





public function connexion_client($email,$password)
{
  $requete_resultat = $this->db->where('email',$email);
  $requete_resultat = $this->db->where('password',$password);

  $requete_resultat = $this->db->get('client');
  return $requete_resultat->result();
  $this->db->close();
}



// SUPPRIMER UN CLIENT AVEC SON ID
 public function supprimer_client($id = "erreur")
 {


   if ($id == "erreur") // ICI le IF on en à plus besoin parce que on passe via le URL Segment et qu'on execute la requete via le controller si c un numerique
   {
    return $id;
   }
   else
   {

     $this->db->delete('client', array('id' => $id));
     $this->db->close();
     return $id;
   }


 }


}




?>
