<?php

/**  Fonction utilisant la librarie Mailin.php pour envoyer un mail **/
function envoyer_mail($APIKEY,$TEMPLATE_MAIL,$email_from,$email_to)
{

  require_once('../projet3/application/libraries/Mailing/Mailin.php');
  $mailin = new Mailin("https://api.sendinblue.com/v2.0", $APIKEY);
  $mail_html=file_get_contents('../projet3/application/template_mail/'.$TEMPLATE_MAIL.'');


  $date_day=date('d/m/Y');

  $data = array( "to" => array($email_to=>""),
    "from" => array($email_from, "Cabinet Avocat"),
    "subject" => "Test (".$date_day.")",
    "html" => $mail_html,
  );



  $mailin->send_email($data);

}


?>
