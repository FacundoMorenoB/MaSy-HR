<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function __construct()
    {
	        parent::__construct();
	        $this->load->helper('form');
    		$this->load->helper('url');
    		if (!$this->session->userdata('s_correo')) {
    			redirect('welcome');
    		}
	}

	public function index()
	{
		$this->load->view('home');
	}

}