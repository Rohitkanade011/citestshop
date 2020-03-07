<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/member/includes/header');
		$this->load->view('auth/member/dashboard');
		$this->load->view('auth/member/includes/footer');
	}

}

/* End of file HomeController.php */
/* Location: ./application/controllers/HomeController.php */
