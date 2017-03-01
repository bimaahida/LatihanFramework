<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => 'Bima Ahida Indaka Sugna'

			);
		$this->load->view('Layout/header');
		$this->load->view('home',$data);
		$this->load->view('Layout/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */