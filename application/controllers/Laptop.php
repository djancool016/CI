<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptop extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('laptop_m', 'laptop');
	}

	public function index()
	{
		$query = $this->laptop->get();
		// $data['header'] = 'Tampilan Laptop';
        // $data['laptop'] = $query->result();
		$data = array (
			'judul' => 'Tampil Data Laptop',
			'laptop' => $query->result(),
		);
		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar');
        $this->load->view('laptop/tampil');
		$this->load->view('tamplates/footer');
	}

	public function add()
	{
		$data = array (
			'judul' => 'Tambah Data Laptop',
		);
        $this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar');
        $this->load->view('laptop/tambah');
		$this->load->view('tamplates/footer');
	}

	public function edit($id = null)
	{
		$query = $this->laptop->get($id);
		$data = array (
			'judul' => 'Edit Data Laptop',
			'laptop' => $query->row()
		);
        $this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar');
        $this->load->view('laptop/edit');
		$this->load->view('tamplates/footer');
	}

	public function del($id)
	{
		$this->laptop->del($id);
		redirect('laptop');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->laptop->add($inputan);

			// $ID_Barang = $this->input->post('ID_Barang');
			// $Nama = $this->input->post('Nama');
			// $Prosesor = $this->input->post('Prosesor');

			//echo $ID_Barang."<br>".$Nama."<br>".$Prosesor;
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->laptop->edit($inputan);
		}
		redirect('laptop');
	}
}
