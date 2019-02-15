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
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
	        parent::__construct();
	        $this->load->helper('form');
    		$this->load->helper('url');
    		$this->load->library('session');
	}
	public function index()
	{
		if (isset($_POST['password'])) {
			$this->load->model('welcome_model');
			if ($this->welcome_model->login(strtolower($_POST['email']),md5($_POST['password']))) {
				#$this->welcome_model->get_roll($_POST['usuario']);
				redirect('System_controller');
			}
			else{
				$this->session->set_flashdata('error', 'Wrong user or password!');
				redirect('welcome');
			}
		}
		$this->load->view('welcome_message');
	}
}
