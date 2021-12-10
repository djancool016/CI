<?php

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('dashboard');
		$this->load->view('tamplates/footer');

	}
    
}