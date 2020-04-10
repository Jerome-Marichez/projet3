 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/** FRONT CONTROLLER
	 */
	public function index()
	{
    $this->load->view('front/index');

	}

  public function actualite()
  {
    $this->load->view('front/actualite');
  }

  public function contact()
  {
    $this->load->view('front/contact');
  }

  public function Davocate()
  {
     $this->load->view('front/Davocate');
  }

  public function DCLigne()
  {
     $this->load->view('front/DCLigne');
  }

  public function DCPublique()
  {
     $this->load->view('front/DCPublique');
  }

  public function DDevis()
  {
     $this->load->view('front/DDevis');
  }

  public function Dformation()
  {
      $this->load->view('front/Dformation');
  }

  public function Dpublic()

  {
     $this->load->view('front/Dpublic');
  }


  public function faq()

  {
    $this->load->view('front/faq');
  }

  public function formation()

  {
  $this->load->view('front/formation');
  }



  public function leCabinet()
  {
    $this->load->view('front/leCabinet');
  }

}
