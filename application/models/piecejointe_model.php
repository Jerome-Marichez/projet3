<?php



class piecejointe_model extends CI_Model

{
         function ajouter_au_dossier($id_dossier,$piece_lien)
         {


           $data = array(
             'id_dossier'=>$id_dossier,
             'piece_lien'=>$piece_lien
           );
           //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
           $this->db->insert('piecejointe',$data);

           $this->db->close();
          }

          function supprimer_piece_jointe($id_dossier,$piece_lien)
          {

          //  $id_dossier = intval($id_dossier); // PAR MESURE DE SECURITE ON UTILISE INTVAL MAIS NORMALEMENT VIA LE CONTROLLER C DEJA CHECKED

            $data = array(
              'id_dossier'=>$id_dossier,
              'piece_lien'=>$piece_lien
            );

            if (!empty($id_dossier))
            {
              $this->db->delete('piecejointe', $data);

              return $piece_lien;
            }


           }


         function afficher_piece_jointe($id_dossier)

         {

           $requete_resultat = $this->db->where('id_dossier',$id_dossier);
          $requete_resultat = $this->db->get('piecejointe');
          return $requete_resultat->result();
          $this->db->close();

          }

}
