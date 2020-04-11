<?php



class piecejointe_model extends CI_Model

{
public function ajouter_au_dossier($id_dossier,$piece_lien)

 {


   $data = array(
     'id_dossier'=>$id_dossier,
     'piece_lien'=>$piece_lien
   );
   //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
   $this->db->insert('piecejointe',$data);

   $this->db->close();
  }
}
