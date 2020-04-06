
<?php

session_start(); //START SESSION

Class login extends CI_Controller {

public function __construct() {
parent::__construct();


$this->load->helper('form');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->model('client_model');
$this->load->view('header');
}

// PAGE CONNEXION
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
      );

      $this->session->set_userdata('isConnected', $data_session);
      $this->load->view('backend/main');


    }
  }


}


}

}


?>
