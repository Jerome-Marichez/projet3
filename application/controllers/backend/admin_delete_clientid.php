<?php


// SA MARCHE MAIS CEST CHELOU  A REGARDER + TARD

Class admin_delete_clientid extends CI_Controller {


  function _remap($PARAMETRE) {
         $this->index($PARAMETRE);
     }



public function index($PARAMETRE)
{

$this->load->model('client_model');


$this->client_model->supprimer_client($PARAMETRE);




}

}

?>
