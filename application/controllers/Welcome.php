
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * map to /index.
     * hp/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

	 $this->load->view('index');

	    //redirect(base_url('/Login'));

		//$this->load->view('welcome_message');
	}

	public function vue_cart(){

	    $this->load->view('vue_cart');
    }



    public function getParameters(){

	    $param1 = $this->uri->segment(5);

	    echo $param1;

    }

    public function component(){

        $this->load->view('component_view');

    }
    public function component2(){

        $this->load->view('component2_view');

    }

    public function vue_instance(){
        $this->load->view('vue_instance');
    }
    public function vue_punchbag(){
        $this->load->view('vue_punchbag');
    }

    public function event_bus(){
        $this->load->view('event_bus');
    }

    public function vue_form(){
        $this->load->view('vue_form');
    }



}
