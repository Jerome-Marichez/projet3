<?php

// DOSSIER en-attente ---> DOSSIER EN ATTENTE
// DOSSIER valide ---> DOSSIER VALIDE
// DOSSIER piece ---> DOSSIER PIECE JOINTE

class dossier_model extends CI_Model

{



 public function afficher_base_dossier($email = '',$id = '')
  {
    if ($id != '') { $requete_resultat = $this->db->where('id',$id); }
    if ($email != '') { $requete_resultat = $this->db->where('email',$email); }
    $requete_resultat = $this->db->get('dossier');
    return $requete_resultat->result();
    $this->db->close();

  }


  public function check_ID_Dossier_Client($id,$email)
  {

    $requete_resultat = $this->db->where('id',$id);
    $requete_resultat = $this->db->where('email',$email);
    $requete_resultat = $this->db->get('dossier');
    $combien = $requete_resultat->num_rows();
    if ($combien > 0){
         return true;
     }
     else{
         return false;
     }
  }


public function count_dossier($statut ='',$email ='')
{
    $this->db->from('dossier');

      if (!empty($statut)) {
        $this->db->where('statut',$statut);
      }
      if (!empty($email)) {
        $this->db->where('email',$email);
      }

    $combien = $this->db->count_all_results();
    return intval($combien);
}



public function update_dossier($id,$statut)
{

  $data = array(
          'statut' => $statut
  );

  $this->db->where('id', $id);
  $this->db->update('dossier', $data);

}


public function cree_dossier($id = 'NULL',$number_dossier,$email)

 {

   $date = date("Y-m-d H:i:s"); // Certain type de date ne sont pas admis dans MYSQL ce format fonctionne en effet si le champ est DATE TIME
   $data = array(
     'id'=>$id,
     'number_dossier'=>$number_dossier,
     'email'=>$email,
     'statut'=>'en-attente',
     'date'=> $date);
   //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
   $this->db->insert('dossier',$data);

   $this->db->close();
  }

// SUPPRIMER UN DOSSIER AVEC SON ID
public function supprimer_dossier($id)
{
  $id = intval($id);
  $this->db->delete('dossier', array('id' => $id));
  $this->db->close();
  return $id;
}


public function modifer_dossier()
{

}




}


?>
