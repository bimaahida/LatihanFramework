<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
			'nama' => 'Bima Ahida Indaka Sugna',
			'nim' => '1541180171',
			'kelas' => 'TI_2C',
			'kampus' => 'Politeknik Negeri Malang',
			'emial' => 'bima.ahida@gmail.com',
			'hobi1' => 'Makan',
			'hobi2' => 'Dota',
			'hobi3' => 'Coding'
			);
		$this->load->view('Layout/header');
		$this->load->view('about',$data);
		$this->load->view('Layout/footer');
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */