<?php



class dossier_model extends CI_Model

{


public function count_all_dossier_classer()
{

  $requete_resultat = $this->db->get('client');
  $combien = $requete_resultat->num_rows();
  return $combien;


}

public function count_all_dossier()
{

  $requete_resultat = $this->db->get('client');
  $combien = $requete_resultat->num_rows();
  return $combien;

}

public function cree_dossier_en_attente()
{

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
