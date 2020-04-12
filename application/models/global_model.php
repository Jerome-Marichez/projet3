<?php
// FONCTION GLOBAL

class Global_model extends CI_Model

{

  public function inserer_ligne_sql($data,$table)
  {
  // $data = array(

  //   'email_ID'=>'NULL',
  //     'email'=> $email,
  //     'droit_public'=>$droit_public,
  //     'droit_prive'=>$droit_prive,
  //     'droit_affaires'=>$droit_affaires);
   //$this->load->database(); PLUS BESOIN CAR AUTOLOAD DE LA DATABASE DANS CONFIG
//   $this->db->insert($table,$data);

  // $this->db->close();

  }

  public function supprimer_ligne_sql($where,$table)
  {


  }





}














?>
