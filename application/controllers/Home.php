<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
			'image1' => 'https://udemy-images.udemy.com/course/750x422/652438_9fee_2.jpg',
			'image2' => 'https://mkhuda.com/wp-content/uploads/2014/04/codeigniter-framework-1024x359.jpg',
			'image3' => 'https://www.wpfreeware.com/wp-content/uploads/2015/01/singlepro-twitter-bootstrap.png'

			);
		$this->load->view('Layout/header');
		$this->load->view('home',$data);
		$this->load->view('Layout/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */