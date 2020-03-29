<?php

class afficher_page extends CI_Controller {
  public function index()
	{
	$this->accueil();
	}

	public function accueil()
	 {

    $this->load->view('header');
    $this->load->view('welcome_message');
    $this->load->view('footer');

   }

   public function quisommenous()
    {

    $this->load->view('header');
    $this->load->view('test.php');
    $this->load->view('footer');

    }

    public function competences()
     {

      $this->load->view('header');
      $this->load->view('vue');
      $this->load->view('footer');

     }

    public function contact()
    {

      $this->load->view('header');
      $this->load->view('contact');
      $this->load->view('footer');


    }





}
?>
