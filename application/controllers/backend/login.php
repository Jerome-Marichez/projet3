
<?php


Class Login extends CI_Controller {

public function __construct() {
parent::__construct();


$this->load->helper('form');
$this->load->helper('mail_helper');
$this->load->helper('client_helper');
$this->load->helper('url');
$this->load->helper('dossier_helper');
$this->load->library('form_validation');
$this->load->library('session');
$this->load->model('newsletter_model');
$this->load->model('client_model');
$this->load->model('dossier_model');
$this->load->model('rendezvous_model');
$this->load->view('header');
}

public function charger_haut_page() { $this->load->view('header'); $this->load->view('backend/haut_page_backend'); }
public function charger_bas_page() { $this->load->view('backend/bas_page_backend'); $this->load->view('footer'); }



////// PAGE CONNEXION LOGIN //////////////////
public function index() {


// $date = date("2020-04-10 10:46:00");
//$this->rendezvous_model->cree_rendezvous_front("","","test","test2","0771651588","boby@yopmail.fr","59140","longuenesse","ma rue exemple",$date,1);
//exit;

$this->charger_haut_page();
$this->load->view('backend/login_form');
$this->charger_bas_page();
}




public function deconnexion() { $this->session->sess_destroy(); redirect(''); } // DETRUIRE SESSION  & REDIRECT HOME




public function connexion() {



   //echo decrypt('MTIzNDU2NzgyNDU0NjU0Mi8qnIcjHYpz4STUPepjF+m7c3bSpoWC58AtHTQk9tlAlUF7O5mrES53d07qo3OlEQ==');
    $this->charger_haut_page();

  // PARTIE RESERVER POUR CHARGER LE ADMIN_MAIN avec les stats
   $stat1 = $this->client_model->count_client();
   $stat2 = $this->dossier_model->count_dossier('en-attente');
   $stat3 = $this->dossier_model->count_dossier('valide');
   $stats = array(
   'stat1' => $stat1,
   'stat2' => $stat2,
   'stat3' => $stat3
   );

  // $stat2= $this->dossier_model->count_all_dossier_classer();
  // $this->dossier_model->count_all_dossier();
  // FIN



    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
      if(isset($this->session->userdata['isConnected'])){

      $this->load->view('backend/menu_backend');
      $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
        if($isItAdmin == 'admin')
        {

          $this->load->view('backend/admin_main',$stats);
        }
        else
        {
           $this->load->view('backend/client_main');
        }



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
          $isItAdmin = isIt_Admin_or_Client($row->client_id);

            $data_session = array(
            'email' => $row->email,
            'client_id' => $row->client_id,
            'password' => $row->password,
            'nom' => $row->nom,
            'prenom' => $row->prenom,
            'id' => $row->id,
            'isItAdmin' => $isItAdmin

            );

        }



              $source_origine = array("[MESSAGE]","[NAME]");

              $source_modifier = array("Vous venez de vous connecté sur votre espace client si ce n'est pas vous merci de nous contacter au plus vite.",$row->nom.' '.$row->prenom);

              envoyer_mail("Connexion",expediteur_mail_data(),$row->email,$source_origine,$source_modifier);

    //////////////////////////////////////////////////////////////////////////////////////////////////////

    ///////////////////////////////////////////////////////////////////////////////////////////////////////


              $this->session->set_userdata('isConnected', $data_session);
              $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
              $this->load->view('backend/menu_backend');

                      if($isItAdmin == 'admin')
                      {

                        $this->load->view('backend/admin_main',$stats);
                      }
                      else
                      {
                         $this->load->view('backend/client_main');
                      }



      }


    }



  $this->charger_bas_page();
}






/////////////////////// FIN PAGE LOGIN ////////////////////////////





///////////////////// Fonction Afficher page VIEW pour le backend //////////////





public function admin_dossiers()
{




  $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
  autoriser_action($isItAdmin,'admin');

  $this->charger_haut_page();

  $resultat = $this->dossier_model->afficher_base_dossier();
  $data['tableau_dossier'] = $resultat;

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_dossiers',$data);


  $this->charger_bas_page();


}



public function show_dossier()
{



  //A FAIRE VERIFIER QUE LE ID du SHOW_DOSSIER CORRESPOND A LID DU CLIENT DISPO //
  // IMPORTANT //


      $this->charger_haut_page();

    // GET ID
      $segment = $this->uri->total_segments();
      $derniersegment = $this->uri->segment($segment);

      $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
      if($this->dossier_model->check_ID_Dossier_Client($derniersegment,$monemail) == TRUE OR $isItAdmin == 'admin' )
      {

        echo "YOURE RIGHT";
      }
    // SEND


    $resultat = $this->dossier_model->afficher_base_dossier('',$derniersegment);
    $data['tableau_dossier'] = $resultat;

    $afficher_piece
    $this->load->view('backend/menu_backend');










    $this->load->view('backend/show_dossier',$data);


    $this->charger_bas_page();


}

public function client_dossiers()
{




  $this->charger_haut_page();

  $monemail = $this->session->userdata['isConnected']['email'];

  $resultat = $this->dossier_model->afficher_base_dossier($monemail,''); // AFFICHER LES DOSSIERS EN RELATION AVEC LE CLIENT
  $data['tableau_dossier'] = $resultat;

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/client_dossiers',$data);


  $this->charger_bas_page();


}


public function admin_formation()
{
  $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
  autoriser_action($isItAdmin,'admin');

  $this->charger_haut_page();

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_formation');

  $this->charger_bas_page();

}

/** RENDEZ VOUS **/

public function action_rendezvous()
{

      $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
      autoriser_action($isItAdmin,'admin');
      $client_ID = $this->input->post('client_id');
      $id =  $this->input->post('id'); // DE LA DEMANDE PAS DE LID CLIENT
      $email =  $this->input->post('email');
      $date_tableau =  $this->input->post('date_tableau');
      $nom = $this->input->post('nom');
      $prenom = $this->input->post('prenom');
      $tel =  $this->input->post('tel');
      $code_postale =  $this->input->post('code_postale');
      $ville =  $this->input->post('ville');
      $adresse = $this->input->post('adresse');



      if($this->input->post('action') == "accepter")
      {





          // SI LE EMAIL EXISTE DEJA DANS LA BASE CLIENT ALORS JE NE CREE PAS DE COMPTE CLIENT PAS CAR IL A UN COMPTE CLIENT

          // IF NOT JE CREE LE COMPTE CLIENT AVEC LES INFO DU FORMULAIRE

          if($this->client_model->check_email_account($email) == false)

          {
          // CREE AUSSI CLIENT SI EMAIL IN EXISTANT

            $password = generer_numero_client();
            //echo $password;
            $client_id = generer_numero_client('particulier');


            $resultat = $this->client_model->cree_client('',$client_id,encrypt($password),$nom,$prenom,$tel,$email,$code_postale,$ville,$code_postale);


            $source_origine = array("[MESSAGE]","[NAME]");
            $NAME = $nom.' '.$prenom;
            $sujet = "Compte Client ".$nom." ".$prenom;
            $source_modifier = array("Nous vous confirmons la création de votre espace client vous pouvez vous connecter via vos identifiants<br><br>E-mail: ".$email."<br><br>Mot de passe: ".$password,$NAME);

            envoyer_mail($sujet,expediteur_mail_data(),$email,$source_origine,$source_modifier); // POUR LE CLIENT
            envoyer_mail($sujet,expediteur_mail_data(),expediteur_mail_data(),$source_origine,$source_modifier); // POUR LAVOCAT
          }


          $this->rendezvous_model->update_rendezvous($id,'valide');

        $date_francaise = date_formater($date_tableau,'d-m-Y')." à ".date_formater($date_tableau,'H')."h".date_formater($date_tableau,'i');
        $sujet = "Rendez vous accepté ".$date_francaise;
        $source_modifier = array("Votre rendez vous pour le ".$date_francaise." est accepté.");
        $source_origine = array("[MESSAGE]","[NAME]");

      }
      if($this->input->post('action') == "refuser")
      {

          $sujet = "Rendez vous refuser ".$date_tableau;
          $source_modifier = array("Votre rendez vous pour le ".$date_francaise." est refusé.");

          $this->rendezvous_model->supprimer_rendezvous($id);

      }

    envoyer_mail($sujet,expediteur_mail_data(),$email,$source_origine,$source_modifier); // POUR LE CLIENT
    envoyer_mail($sujet,expediteur_mail_data(),expediteur_mail_data(),$source_origine,$source_modifier); // POUR LAVOCAT

  $this->rendezvous();



}


public function rendezvous_formation()
{
  $this->rendezvous(true);
}


public function rendezvous($formation = false)
{

    $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);

    $this->charger_haut_page();

    $this->load->view('backend/menu_backend');

    if ($isItAdmin == 'admin'){
      $resultat = $this->rendezvous_model->afficher_rendezvous('rendezvous');


      $data['tableau_rendezvous'] = $resultat;
      $this->load->view('backend/rendezvous',$data);
    }
    else
    {
      $resultat = $this->rendezvous_model->afficher_rendezvous('rendezvous',$this->session->userdata['isConnected']['email']);


      $data['tableau_rendezvous'] = $resultat;
      $this->load->view('backend/rendezvous',$data);
    }


    $this->charger_bas_page();
}


/** FIN RENDEZ VOUS **/

/** ADMIN NEWSLETTER **/
public function admin_newsletter()
{
  $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
  autoriser_action($isItAdmin,'admin');

  $this->charger_haut_page();


  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_newsletter');


  $this->charger_bas_page();

}
/** FIN ADMIN NEWSLETTER **/



/** DOSSIERS **/




public function ajouter_dossier()
{
  $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
  autoriser_action($isItAdmin,'admin');

  $email = $this->input->post('email');
  $this->form_validation->set_rules('email', $email, 'trim|required');

  if ($this->form_validation->run() == TRUE) {

      if($this->client_model->check_email_account($email) == false)

      {

        $data = array(
        'erreur_message' => 'Erreur le compte client associé à cette email est inconnu'
        );


      }
      else
      {
        $generer_numero_dossier = generer_numero_dossier();
        $this->dossier_model->cree_dossier('',$generer_numero_dossier,$email,$statut);
        $data = array(
        'valide_message' => 'Votre dossier est crée avec succès, un email à était envoyé au client'
        );
        // DO THE JOB


          $source_origine = array("[MESSAGE]","[NAME]");
          $NAME = '';
          $sujet = "N° DOSSIER ".$generer_numero_dossier.' est crée';
          $source_modifier = array("Votre N° de dossier: ".$generer_numero_dossier." est crée et disponible sur votre espace client ",$NAME);

          envoyer_mail($sujet,expediteur_mail_data(),$email,$source_origine,$source_modifier); // POUR LE CLIENT
//          envoyer_mail($sujet,expediteur_mail_data(),expediteur_mail_data(),$source_origine,$source_modifier); // POUR LAVOCAT




      }


      $this->charger_haut_page();

      $this->load->view('backend/menu_backend');
      $resultat = $this->dossier_model->afficher_base_dossier();
      $data['tableau_dossier'] = $resultat;
      $this->load->view('backend/admin_dossiers', $data);


      $this->charger_bas_page();


  }
}


/** ADMIN CLIENT **/

public function admin_show_client()
{

    $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
    autoriser_action($isItAdmin,'admin');
    $segment = $this->uri->total_segments();
    $derniersegment = $this->uri->segment($segment);


    if(!empty($derniersegment) AND is_numeric($derniersegment))
    {

      $this->charger_haut_page();

      $this->load->view('backend/menu_backend');


        $resultat = $this->client_model->afficher_base_client($derniersegment);


        $data['tableau_client'] = $resultat;
        $this->load->view('backend/show_client',$data);



    $this->charger_bas_page();


  }

}
public function admin_clients()
{


  $segment = $this->uri->total_segments();
  $derniersegment = $this->uri->segment($segment);

  $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
  autoriser_action($isItAdmin,'admin');


  if(!empty($derniersegment) AND is_numeric($derniersegment))
  {
    $this->client_model->supprimer_client($derniersegment);
    redirect('backend/login/admin_clients', 'refresh');
  }



  $resultat = $this->client_model->afficher_base_client();
  $data['tableau_client'] = $resultat;



  $this->charger_haut_page();

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_clients', $data);


  $this->charger_bas_page();


}





public function parametre()
{
//  $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
//  autoriser_action($isItAdmin,'admin');

  $this->charger_haut_page();

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/modifer_mot_de_passe_form');
//  $this->load->view('backend/admin_parametre');


  $this->charger_bas_page();
}



///////////// Fin Fonction Afficher page VIEW pour le backend /////////////////////


/////////////////// Fonction Controlleur CLIENTS //////////////////

public function ajouter_client()
{
  $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);
  autoriser_action($isItAdmin,'admin');

  //print_r($_POST);

  $cree_nom =  $this->input->post('cree_nom');
  $cree_prenom =  $this->input->post('cree_prenom');
  $cree_telephone =  $this->input->post('cree_telephone');
  $cree_email =  $this->input->post('cree_email');
  $cree_adresse_postal =  $this->input->post('cree_adresse_postal');
  $cree_code_postal =  $this->input->post('cree_code_postal');
  $cree_ville=  $this->input->post('cree_ville');



  $password = generer_numero_client();
  //echo $password;
  $client_id = generer_numero_client('particulier');


  $resultat = $this->client_model->cree_client('',$client_id,encrypt($password),$cree_nom,$cree_prenom,$cree_telephone,$cree_email,$cree_code_postal,$cree_ville,$cree_adresse_postal);


  $source_origine = array("[MESSAGE]","[NAME]");
  $NAME = $cree_nom.' '.$cree_prenom;
  $sujet = "Compte Client ".$cree_nom." ".$cree_prenom;
  $source_modifier = array("Nous vous confirmons la création de votre espace client vous pouvez vous connecter via vos identifiants<br><br>E-mail: ".$cree_email."<br><br>Mot de passe: ".$password,$NAME);

  envoyer_mail($sujet,expediteur_mail_data(),$cree_email,$source_origine,$source_modifier); // POUR LE CLIENT
  envoyer_mail($sujet,expediteur_mail_data(),expediteur_mail_data(),$source_origine,$source_modifier); // POUR LAVOCAT



  redirect('backend/login/admin_clients', 'refresh');


}

//////////////////// FIN FONCTION CLIENTS ////////////////////////////////












///////////////////// FONCTION  CONTROLLEUR  MODIFER MOT DE PASSE  /////////////////////////////////

public function modifer_password()

{
    //echo "test";
    //var_dump($_POST);
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
          $nom = ($this->session->userdata['isConnected']['nom']);
          $prenom = ($this->session->userdata['isConnected']['prenom']);
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
              $source_origine = array("[MESSAGE]","[NAME]");

              $source_modifier = array("Vous venez de changer votre mot de passe, voici ce dernier: ".$nouveau_password,$nom." ".$prenom);

              envoyer_mail("Changement mot de passe",expediteur_mail_data(),$email,$source_origine,$source_modifier);



            }

          }
        }
      }

      // ON AFFICHE LA FORM

      if ($echec_modifier_password == false)
      {
        $data = array(
        'deconnexion_message' => 'Votre mot de passe est modifié avec succès'
        );
          $this->session->sess_destroy(); // Oui voila ici on détruit la session
          $this->load->view('backend/login_form', $data);
      }
      else
      {
        $data = array(
        'erreur_message' => 'Vos nouveaux mot de passe ne sont pas identique ou vous ne disposez pas les droits.'
        );

              $this->charger_haut_page();

              $this->load->view('backend/menu_backend');
              $this->load->view('backend/modifer_mot_de_passe_form',$data);


              $this->charger_bas_page();

      }




}


///////////////////// FIN FONCTION PARAMETRE ///////////////////////////////


















}
?>
