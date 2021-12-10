<?php

class Informasi extends CI_Controller {

	public function visimisi()
	{
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('informasi/visimisi');
		$this->load->view('tamplates/footer');

	}

    public function struktur()
	{
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('informasi/struktur');
		$this->load->view('tamplates/footer');

	}

	public function profile()
	{
		$this->load->view('tamplates/header');
		$this->load->view('tamplates/sidebar');
		$this->load->view('informasi/profile');
		$this->load->view('tamplates/footer');

	}
    
}