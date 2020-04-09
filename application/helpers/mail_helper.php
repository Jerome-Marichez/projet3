<?php

/**  Fonction utilisant la librarie Mailin.php pour envoyer un mail **/

/** APIKEY = CLE DE API SEND IN BLUE  $TEMPLATE_MAIL = TEMPLATE HTML MAIL / $sujet = "Le Sujet" /  $email_from = Adresse d'envoie / $email_to = Adresse de réception  **/
/** $source_origine = element à rechercher / $source_modifier elements à modifier  **/

function envoyer_mail($sujet,$email_from = 'avocat@test.fr',$email_to,$source_origine,$source_modifier,$TEMPLATE_MAIL = 'template_mail.php',$APIKEY = "MSbCRfg9VwkvtG7J")
{

  require_once('../projet3/application/libraries/Mailing/Mailin.php');
  $mailin = new Mailin("https://api.sendinblue.com/v2.0", $APIKEY);
  $mail_html=file_get_contents('../projet3/application/template_mail/'.$TEMPLATE_MAIL.'');

  $mail_html = str_replace($source_origine,$source_modifier,$mail_html);
  $date_day=date('d/m/Y');

  $data = array( "to" => array($email_to=>""),
    "from" => array($email_from, 'A.G.D-Z Cabinet Avocat'),
    "subject" => $sujet." (".$date_day.")",
    "html" => $mail_html,
  );

    if($mailin->send_email($data))
    {
      return true;
    }
    else
    {
      return false;
    }

}


function expediteur_mail_data()
{

return "avocat@test.fr"; 
}

?>
