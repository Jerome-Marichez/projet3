<?php



class dossier_model extends CI_Model

{

public function cree_dossier_en_attente()
{

}

public function refuser_dossier_en_attente()
{

}

public function cree_dossier()
{

}


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
