
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
$this->load->model('piecejointe_model');

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


    $this->charger_haut_page();



    $this->form_validation->set_rules('email', 'email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
      if(isset($this->session->userdata['isConnected'])){

        $this->load->view('backend/menu_backend');
        $isItAdmin = isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']);


        $stats = array(
        'stat1' => $this->client_model->count_client(),
        'stat2' => $this->dossier_model->count_dossier('en-attente'),
        'stat3' => $this->dossier_model->count_dossier('valide'),
        'stat4' => $this->dossier_model->count_dossier('',$this->session->userdata['isConnected']['email']),
        'stat5' => $this->rendezvous_model->count_rendezvous('',$this->session->userdata['isConnected']['email']),
        'stat6' => $this->rendezvous_model->count_rendezvous('',$this->session->userdata['isConnected']['email'])
        );

        if($isItAdmin == 'admin')
        {

          $this->load->view('backend/admin_main',$stats);
        }
        else
        {
           $this->load->view('backend/client_main',$stats);
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


              $stats = array(
              'stat1' => $this->client_model->count_client(),
              'stat2' => $this->dossier_model->count_dossier('en-attente'),
              'stat3' => $this->dossier_model->count_dossier('valide'),
              'stat4' => $this->dossier_model->count_dossier('',$this->session->userdata['isConnected']['email']),
              'stat5' => $this->rendezvous_model->count_rendezvous('',$this->session->userdata['isConnected']['email']),
              'stat6' => $this->rendezvous_model->count_rendezvous('',$this->session->userdata['isConnected']['email'])
              );
                      if($isItAdmin == 'admin')
                      {

                        $this->load->view('backend/admin_main',$stats);
                      }
                      else
                      {
                         $this->load->view('backend/client_main',$stats);
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

  $segment = $this->uri->total_segments();
  $derniersegment = $this->uri->segment($segment); // Qui est notre ID


  if(!empty($derniersegment) AND is_numeric($derniersegment))
    {
      $this->dossier_model->supprimer_dossier($derniersegment);
      redirect('backend/login/admin_dossiers', 'refresh');
    }



  $this->charger_haut_page();


  $resultat = $this->dossier_model->afficher_base_dossier();
  $data['tableau_dossier'] = $resultat;

  $this->load->view('backend/menu_backend');
  $this->load->view('backend/admin_dossiers',$data);


  $this->charger_bas_page();


}

public function upload()
{
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|txt|bmp|xls|doc';
        $config['max_size']             = 5000;
        $config['max_width']            = 4000;
        $config['max_height']           = 4000;


        $this->load->library('upload', $config);

        $segment = $this->uri->total_segments();
        $derniersegment = $this->uri->segment($segment); // Qui est notre ID

        // ON Verifie ainsi l'origine de l'upload

        if ($derniersegment != $this->input->post('id'))
        {
           show_404();

        }
        if ( ! $this->upload->do_upload('monfichier'))
        {


                  show_404();
        }
        else
        {

                $data = $this->upload->data();
                $filename = $data['file_name'];
              //  echo "<br>";
              //  echo $derniersegment;
              //  echo "<br>";
                $email = $this->input->post('email');
              //  echo "<br>";
              //  echo $email;
            //    exit;

//                echo "<br>";
                $dossier_numero = $this->input->post('ndossier');
                echo $dossier_numero;

                $this->piecejointe_model->ajouter_au_dossier($derniersegment,$filename);


                  $source_origine = array("[MESSAGE]","[NAME]");
                  $NAME = '';
                  $sujet = "Ajout de piece jointe au N° DOSSIER ".$dossier_numero;
                  $source_modifier = array("Vous avez ajouté une pièce jointe au dossier: ".$dossier_numero." qui est disponible sur votre espace client ",$NAME);

                  echo envoyer_mail($sujet,expediteur_mail_data(),$email,$source_origine,$source_modifier); // POUR LE CLIENT
                  echo envoyer_mail($sujet,expediteur_mail_data(),expediteur_mail_data(),$source_origine,$source_modifier); // POUR LAVOCAT



                redirect('backend/login/show_dossier/'.$derniersegment);
        }
}


public function show_dossier()
{

  //A FAIRE VERIFIER QUE LE ID du SHOW_DOSSIER CORRESPOND A LID DU CLIENT DISPO //
  // IMPORTANT //




    // GET ID
      $segment = $this->uri->total_segments();
      $derniersegment = $this->uri->segment($segment);

      $monemail = $this->session->userdata['isConnected']['email'];

    // SUPPRIMER PIECE JOINTE


      if(isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']) == 'admin' || $this->dossier_model->check_ID_Dossier_Client($derniersegment,$monemail) == true )
      {

        // DANS LE CADRE OU ON CE TROUVE DANS LE DOSSIER ET QUON EST CLIENT OU ADMIN SUR CE DOSSIER ON PEUX SUPPRIMER UNE PIECE JOINTE
                    $id_piece = $this->input->post('id_piece');
                    if (!empty($id_piece))
                    {
                      $id_dossier = $this->input->post('id_dossier');
                      $piece_lien = $this->input->post('piece_lien');
                  //    echo $id_piece; echo "<br>";
                //      echo $piece_lien; echo "<br>";
              //        echo $id_dossier; echo "<br>";

                      $dir = "./uploads/".$piece_lien;
                          if (!unlink($dir)) {
                              show_404();
                              exit;
                          }

                      $this->piecejointe_model->supprimer_piece_jointe($id_dossier,$piece_lien);
                      $source_origine = array("[MESSAGE]","[NAME]");
                      $NAME = '';
                      $sujet = "Piece jointe supprimer au dossier:  ".$id_dossier;
                      $source_modifier = array("Nous vous confirmons la suppresion de la piece jointe ".$piece_lien."<br>à votre dossier ".$id_dossier,$NAME);

                    //  echo $monemail;
                      envoyer_mail($sujet,expediteur_mail_data(),$monemail,$source_origine,$source_modifier); // POUR LE CLIENT
                      envoyer_mail($sujet,expediteur_mail_data(),expediteur_mail_data(),$source_origine,$source_modifier); // POUR LAVOCAT
                    }
        // END

            $this->charger_haut_page();

            $resultat = $this->dossier_model->afficher_base_dossier('',$derniersegment);
            $data['tableau_dossier'] = $resultat;


            $resultat = $this->piecejointe_model->afficher_piece_jointe($derniersegment);
            $data['piece_jointe'] = $resultat;


            $this->load->view('backend/menu_backend');



              if (isIt_Admin_or_Client($this->session->userdata['isConnected']['client_id']) == 'admin')
              {

                   // Seulement pour admin

                   $changer_statut_dossier = $this->input->post('changer_statut_dossier');
                   if (!empty($changer_statut_dossier))
                   {
                //     echo "triggered";
                     $id_dossier = $this->input->post('id_specific');
                     $number_dossier = $this->input->post('number_dossier');
                     $email_dossier = $this->input->post('email_dossier');
                     $statut = $this->input->post('submit');

                  //   echo "<br>";
                    // echo $id_dossier;
                     //echo $statut;
                    // echo "<br>";


                     $this->dossier_model->update_dossier($id_dossier,$statut);


                     $source_origine = array("[MESSAGE]","[NAME]");
                     $NAME = '';
                     $sujet = "Dossier N°".$id_dossier;

                     $source_modifier = array("Votre dossier N°".$number_dossier." vient de passer à ".statut_dossier_texte($statut),$NAME);
                     envoyer_mail($sujet,expediteur_mail_data(),$email_dossier,$source_origine,$source_modifier); // POUR LE CLIENT
                     envoyer_mail($sujet,expediteur_mail_data(),expediteur_mail_data(),$source_origine,$source_modifier); // POUR LAVOCAT


                   }
                   $this->load->view('backend/admin_form_dossier',$data);

              }

              $resultat = $this->dossier_model->afficher_base_dossier('',$derniersegment);
              $data['tableau_dossier'] = $resultat;

            $this->load->view('backend/show_dossier',$data);
            $this->load->view('backend/upload_form',$data);
            $this->load->view('backend/piece_jointe',$data);


            $this->charger_bas_page();


      }
      else
      {
       show_404();

      }
    // SEND



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
  $cree_type = $this->input->post('cree_type');
  $cree_nom =  $this->input->post('cree_nom');
  $cree_prenom =  $this->input->post('cree_prenom');
  $cree_telephone =  $this->input->post('cree_telephone');
  $cree_email =  $this->input->post('cree_email');
  $cree_adresse_postal =  $this->input->post('cree_adresse_postal');
  $cree_code_postal =  $this->input->post('cree_code_postal');
  $cree_ville=  $this->input->post('cree_ville');



  $password = generer_numero_client();
  //echo $password;
  $client_id = generer_numero_client($cree_type);


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


          $this->charger_haut_page();

          $this->load->view('backend/login_form', $data);
          $this->charger_bas_page();
      }
      else
      {
        $data = array(
        'erreur_message' => 'Vos nouveaux mot de passe ne sont pas identique, ou votre ancien mot de passe est invalide.'
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
