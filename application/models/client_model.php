<?php

class client_model extends CI_Model

{

  public function sortir_base_client()
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


 public function supprimer_client($droit_public,$droit_prive,$droit_affaires)
 {
 $requete_resultat = $this->db->where('droit_public',$droit_public);
 $requete_resultat = $this->db->where('droit_prive',$droit_prive);
 $requete_resultat = $this->db->where('droit_affaires',$droit_affaires);
 $requete_resultat = $this->db->get('newsletter');
 return $requete_resultat->result();
 $this->db->close();
 }


}




?>
