<?php



class Piecejointe_model extends CI_Model

{
  // DATABASE DYNAMIC DETAILS
  private  $table_piecejointe = "piecejointe";
  private  $colonne_id_dossier = "id_dossier";
  private  $colonne_piece_lien = "piece_lien";


         function ajouter_au_dossier($id_dossier,$piece_lien)
         {


           $data = array(
             $this->colonne_id_dossier=>$id_dossier,
             $this->colonne_piece_lien=>$piece_lien
           );
           //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
           $this->db->insert($this->table_piecejointe,$data);

           $this->db->close();
          }

          function supprimer_piece_jointe($id_dossier,$piece_lien)
          {

          //  $id_dossier = intval($id_dossier); // PAR MESURE DE SECURITE ON UTILISE INTVAL MAIS NORMALEMENT VIA LE CONTROLLER C DEJA CHECKED

            $data = array(
              $this->colonne_id_dossier=>$id_dossier,
              $this->colonne_piece_lien=>$piece_lien
            );

            if (!empty($id_dossier))
            {
              $this->db->delete($this->table_piecejointe, $data);

              return $piece_lien;
            }


           }


         function afficher_piece_jointe($id_dossier)

         {

            $requete_resultat = $this->db->where($this->colonne_id_dossier,$id_dossier);
            $requete_resultat = $this->db->get($this->table_piecejointe);
            return $requete_resultat->result();
            $this->db->close();

          }

}
