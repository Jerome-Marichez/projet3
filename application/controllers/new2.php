<?php

class new2 extends CI_Controller {
  public function index()
	{
	$this->accueil();
	}

	public function accueil()
	 {
    $this->load->view('vue');
   }

}
?>
