
<?php

session_start(); //START SESSION

Class Login extends CI_Controller {

public function __construct() {
parent::__construct();


$this->load->helper('form');
$this->load->helper('mail_helper');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->model('newsletter_model');
$this->load->model('client_model');
$this->load->view('header');
}





////// PAGE CONNEXION LOGIN //////////////////
public function index() {
$this->load->view('backend/login_form');
}




public function deconnexion() {

  $data_array = array(
  'email' => '',
  'password' => '',
  'client_id' => ''
  );
  $this->session->unset_userdata('isConnected', $data_array);
  $data['deconnexion_message'] = 'Déconnexion avec succès';
  $this->load->view('backend/login_form', $data);

}



public function connexion() {

  $this->form_validation->set_rules('email', 'email', 'trim|required');
  $this->form_validation->set_rules('password', 'Password', 'trim|required');
  if ($this->form_validation->run() == FALSE) {
  if(isset($this->session->userdata['isConnected'])){
  $this->load->view('menu_backend');
  $this->load->view('main');
  }else{
  $this->load->view('backend/login_form');
  }
  } else {

    $email =  $this->input->post('email');
    $password = $this->input->post('password');

// ON TESTE LA CONNEXION AVEC BASE DE DONNE
  $resultat = $this->client_model->connexion_client($email,encrypt($password));



  if (empty($resultat))
  {
    //echo "ya rien";
    $data = array(
    'erreur_message' => 'Mauvais Email ou Mot de Passe'
    );


    $this->load->view('backend/login_form', $data);
  }
  else
  {


    foreach($resultat as $row)
    {

      // SI CLIENT EXISTE CREE SESSION
      //$valeur_final = $valeur_final . $row->email;
      //echo $valeur_final;

      $data_session = array(
      'email' => $row->email,
      'client_id' => $row->client_id,
      'password' => $row->password,
      'nom' => $row->nom,
      'prenom' => $row->prenom,
      'id' => $row->id

      );

    }




    $source_origine = array("[MESSAGE]","[NAME]");

    $source_modifier = array("Bonjour, vous venez de vous connecté sur votre espace client si ce n'est pas vous merci de nous contacter au plus vite.",$row->nom);

    //      envoyer_mail("Connexion","avocat@test.fr",$row->email,$source_origine,$source_modifier);
          $this->session->set_userdata('isConnected', $data_session);
          $this->load->view('backend/menu_backend');
          $this->load->view('backend/main');



  }


}


}






/////////////////////// FIN PAGE LOGIN ////////////////////////////





///////////////////// Fonction Afficher page VIEW via le backend //////////////





public function admin_dossier()
{

$this->load->view('backend/admin_dossiers');
}

public function admin_formation()
{
  $this->load->view('backend/admin_formation');

}

public function admin_rendezvous()
{
  $this->load->view('backend/admin_rendezvous');

}

public function admin_newsletter()
{

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_newsletter');

}



public function admin_clients()
{

  $resultat = $this->client_model->afficher_base_client();


  $data['tableau_client'] = $resultat;

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_clients', $data);

}


public function ajouter_client() {

print_r($_POST);

$cree_nom =  $this->input->post('cree_nom');
$cree_prenom =  $this->input->post('cree_prenom');
$cree_telephone =  $this->input->post('cree_telephone');
$cree_email =  $this->input->post('cree_email');
$cree_adresse_postal =  $this->input->post('cree_adresse_postal');
$cree_code_postal =  $this->input->post('cree_code_postal');
$cree_ville=  $this->input->post('cree_ville');

echo "<br><br>";
echo $cree_nom;
echo "<br>";
echo $cree_prenom;
echo "<br>";
echo $cree_telephone;
echo "<br>";
echo $cree_email;
echo "<br>";
echo $cree_adresse_postal;
echo "<br>";
echo $cree_code_postal;
echo "<br>";
echo $cree_ville;
//$this->load->view('backend/ajouter_client');
}




public function admin_parametre()
{
  $this->load->view('backend/admin_parametre');

}

///////////// Fin des fonctions afficher pages /////////////////////















}
?>
