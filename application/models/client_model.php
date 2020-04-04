<?php

class client_model extends CI_Model

{

  public function afficher_base_client()
  {

    $requete_resultat = $this->db->get('client');
    return $requete_resultat->result();
    $this->db->close();

  }

// AJOUTER VERIFICATION CLIENT DEJA EXISTANT
public function cree_client($id = 'NULL',$client_id,$password,$nom,$prenom,$tel,$email,$code_postale,$ville,$autre_champ = 'NULL')

 {
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
     'autre_champ'=>$autre_champ);
   //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
   $this->db->insert('client',$data);

   $this->db->close();
  }


 public function supprimer_client($id = "erreur")
 {


   if ($id == "erreur")
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
