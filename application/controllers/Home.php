<?php

class Home extends CI_Controller {

	public function index( )
	{
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('home');
		$this->load->view('tamplates/footer');

	}
    
}