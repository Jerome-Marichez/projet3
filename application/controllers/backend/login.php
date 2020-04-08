
<?php

session_start(); //START SESSION

Class Login extends CI_Controller {

public function __construct() {
parent::__construct();


$this->load->helper('form');
$this->load->helper('mail_helper');
$this->load->helper('client_helper');
$this->load->helper('url');
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

//  $data_array = array(
//  'email' => '',
//  'password' => '',
//  'client_id' => ''
//  );
  //$this->session->unset_userdata('isConnected', $data_array);
  $this->session->sess_destroy();
  $data['deconnexion_message'] = 'Déconnexion avec succès';
  $this->load->view('backend/login_form', $data);

}



public function connexion() {

  $this->form_validation->set_rules('email', 'email', 'trim|required');
  $this->form_validation->set_rules('password', 'Password', 'trim|required');
  if ($this->form_validation->run() == FALSE) {
  if(isset($this->session->userdata['isConnected'])){
  $this->load->view('backend/menu_backend');
  $this->load->view('backend/main');
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





///////////////////// Fonction Afficher page VIEW pour le backend //////////////





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


/** ADMIN NEWSLETTER **/
public function admin_newsletter()
{

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_newsletter');

}
/** FIN ADMIN NEWSLETTER **/


/** ADMIN CLIENT **/
public function admin_clients()
{

  $resultat = $this->client_model->afficher_base_client();


  $data['tableau_client'] = $resultat;

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_clients', $data);

}





public function admin_parametre()
{

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/modifer_mot_de_passe_form');
  $this->load->view('backend/admin_parametre');

}



///////////// Fin Fonction Afficher page VIEW pour le backend /////////////////////


/////////////////// Fonction Controlleur CLIENTS //////////////////

public function ajouter_client()
{

  print_r($_POST);

  $cree_nom =  $this->input->post('cree_nom');
  $cree_prenom =  $this->input->post('cree_prenom');
  $cree_telephone =  $this->input->post('cree_telephone');
  $cree_email =  $this->input->post('cree_email');
  $cree_adresse_postal =  $this->input->post('cree_adresse_postal');
  $cree_code_postal =  $this->input->post('cree_code_postal');
  $cree_ville=  $this->input->post('cree_ville');



  $password = generer_numero_client();
  echo $password;
  $client_id = generer_numero_client('particulier');


  $resultat = $this->client_model->cree_client('',$client_id,encrypt($password),$cree_nom,$cree_prenom,$cree_telephone,$cree_email,$cree_code_postal,$cree_ville,$cree_adresse_postal);


  $source_origine = array("[MESSAGE]","[NAME]");
  $NAME = $cree_nom.' '.$cree_prenom;
  $sujet = "Compte Client ".$cree_nom." ".$cree_prenom;
  $source_modifier = array("Nous vous confirmons la création de votre espace client vous pouvez vous connecter via vos identifiants<br><br>E-mail: ".$cree_email."<br><br>Mot de passe: ".$password,$NAME);

  //envoyer_mail($sujet,"avocat@test.fr",$cree_email,$source_origine,$source_modifier); POUR LE CLIENT
  //envoyer_mail($sujet,"avocat@test.fr",$cree_email,$source_origine,$source_modifier); POUR LAVOCAT



    redirect('backend/login/admin_clients', 'refresh');

    $this->load->view('backend/menu_backend');
    $this->load->view('backend/admin_clients');
}

//////////////////// FIN FONCTION CLIENTS ////////////////////////////////












///////////////////// FONCTION  CONTROLLEUR  PARAMETRE /////////////////////////////////

public function modifer_password()

{
    echo "test";
    var_dump($_POST);
    // PREMIERE REQUETE ON VERIFIE SI LE MOT DE PASSE EXISTE




  // ON recupere nos champs avec nos règles
$this->form_validation->set_rules('password', 'mot de passe', 'trim|required');
$this->form_validation->set_rules('nouveau_password', 'mot de passe', 'trim|required');
$this->form_validation->set_rules('nouveau_password2', 'mot de passe', 'trim|required');



    $ancien_motpasse =  $this->input->post('password');
    $nouveau_password = $this->input->post('nouveau_password');
    $nouveau_password2 =$this->input->post('nouveau_password2');


    $echec_modifier_password = true; // PAR DEFAULT On considere que l'opération sera un echec

    if ($this->form_validation->run() == TRUE) {
      if ($nouveau_password == $nouveau_password2 )
    		{
        //  echo "bon pass";

          // SI ET SEULEMENT SI LES 2 CHAMPS NOUVEAU MDP SONT IDENTIQUE ON PROCEDE A LA VERIFICATION DE LA SESSION
          if (isset($this->session->userdata['isConnected']))
          {
          $password = ($this->session->userdata['isConnected']['password']);
          $email = ($this->session->userdata['isConnected']['email']);
          $id = ($this->session->userdata['isConnected']['id']);

          // Verification de la connexion
          $resultat = $this->client_model->connexion_client($email,encrypt($ancien_motpasse));


            // verification de la connexion ?
            if (!empty($resultat))

            {
              $echec_modifier_password = false;
              // EXECUTER LUPDATE DU NOUVEAU MOT DE PASSE
              $update = $this->client_model->update_client_password($id,encrypt($nouveau_password));
              // UPDATE SESSION

              

              // ON ENVOIE LES IDENTIFIANTS AU EMAIL CONCERNE

            }

          }
        }
      }

      // ON AFFICHE LA FORM

      if ($echec_modifier_password == false)
      {
        $data = array(
        'valide_message' => 'Votre nouveau mot de passe à bien était pris en compte.'
        );
      }
      else
      {
        $data = array(
        'erreur_message' => 'Vos nouveau mot de passe ne sont pas identique ou vous ne disposez pas les droits.'
        );



      }




      $this->load->view('backend/menu_backend');
      $this->load->view('backend/modifer_mot_de_passe_form',$data);
}


///////////////////// FIN FONCTION PARAMETRE ///////////////////////////////


















}
?>
