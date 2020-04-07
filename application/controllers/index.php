 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
    $this->load->view('header');
		$this->load->view('welcome_message');
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
