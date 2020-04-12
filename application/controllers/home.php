 <?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {


  public function __construct() {
  parent::__construct();
  $this->load->helper('url');


  }


	/** FRONT CONTROLLER
	 */
	public function index()
	{
    $this->load->view('front/index');

	}

  public function acces()
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

  public function contact()
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

  public function rdv()
  {
        $this->load->view('front/rdv');
  }




}
