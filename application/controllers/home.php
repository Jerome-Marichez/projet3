 <?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {


  public function __construct() {
  parent::__construct();
  $this->load->helper('url');


  }


	/** FRONT CONTROLLER
	 */
	public function Index()
	{
    $this->load->view('front/index');

	}

  public function Acces()
  {
    $this->load->view('front/acces');
  }

  public function Dactualite()
  {
    $this->load->view('front/actualite');
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

  public function Contact()
  {
     $this->load->view('front/contact');
  }


    public function DContact()
    {
       $this->load->view('front/Dcontact');
    }


  public function Dformation()
  {
      $this->load->view('front/Dformation');
  }

  public function Dpublic()

  {
     $this->load->view('front/Dpublic');
  }




  public function Faq()

  {
  $this->load->view('front/faq');
  }



  public function Formation()
  {
    $this->load->view('front/formation');
  }


  public function LeCabinet()
  {
      $this->load->view('front/leCabinet');
  }

  public function Rdv()
  {
        $this->load->view('front/rdv');
  }




}
