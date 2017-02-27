<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact  extends CI_Controller {

	public function index()
	{
		$this->load->view('Layout/header');
		$this->load->view('contact');
		$this->load->view('Layout/footer');
	}

}

/* End of file Contact */
/* Location: ./application/controllers/Contact */