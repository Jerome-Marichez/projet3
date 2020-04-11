<?php

// DOSSIER en-attente ---> DOSSIER EN ATTENTE
// DOSSIER valide ---> DOSSIER VALIDE
// DOSSIER piece ---> DOSSIER PIECE JOINTE

class dossier_model extends CI_Model

{



 public function afficher_base_dossier($id =  '',$email ='')
  {

    if ($id != '') {  $requete_resultat = $this->db->where('id',$id);  } else if  ($email != '') { $requete_resultat = $this->db->where('email',$email); }
    $requete_resultat = $this->db->get('dossier');
    return $requete_resultat->result();
    $this->db->close();

  }
public function count_dossier($statut ='',$email ='')
{

  $requete_resultat = $this->db->get('dossier');
  $combien = $requete_resultat->num_rows();
  return $combien;

}



public function refuser_dossier_en_attente()
{

}

public function cree_dossier()
{

}

// SUPPRIMER UN DOSSIER AVEC SON ID
public function supprimer_dossier($id)
{
  $this->db->delete('dossier', array('id' => $id));
  $this->db->close();
  return $id;
}


public function modifer_dossier()
{

}




}


?>
