<?php



  // A FAIRE GERER LES EXCEPTION  POUR UPDATE SI ERREUR DUPLICATION DE LEMAIL DANS FONCTION inserer_email_newsletter

class Newsletter_model extends CI_Model

{

// $EMAIL = EMAIL A INSERER
// $droit_public,$droit_prive,$droit_affaires si 1 alors c'est coché validé, si 0 c'est que le client à dit non.
 public function inserer_email_newsletter($email, $droit_public = 1, $droit_prive = 1, $droit_affaires = 1)
 {

  $data = array(
    'email_ID'=>'NULL',
    'email'=> $email,
    'droit_public'=>$droit_public,
    'droit_prive'=>$droit_prive,
    'droit_affaires'=>$droit_affaires);
  //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
  $this->db->insert('newsletter',$data);

  $this->db->close();

 }


public function afficher_les_emails($droit_public = 0,$droit_prive = 0,$droit_affaires = 0)
{

if($droit_public == 1) { $requete_resultat = $this->db->where('droit_public',$droit_public); }
if($droit_prive == 1) {$requete_resultat = $this->db->where('droit_prive',$droit_prive);}
if($droit_affaires == 1) {$requete_resultat = $this->db->where('droit_affaires',$droit_affaires);}
$requete_resultat = $this->db->get('newsletter');
return $requete_resultat->result();
$this->db->close();
}



}


?>
