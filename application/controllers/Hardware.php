<?php

class Hardware extends CI_Controller{
    function __construct()
	{
		parent::__construct();
		$this->load->model('m_hardware', 'hardware', '', TRUE);
	}

	public function index()
	{
		$query = $this->hardware->get();
		$data = array ('hardware' => $query->result());

		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar');
        $this->load->view('hardware');
		$this->load->view('tamplates/footer');
	}

    public function add()
	{
		$query = $this->hardware->get();
		$data = array ('hardware' => $query->result());

		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar');
        $this->load->view('hardware/tambah');
		$this->load->view('tamplates/footer');
	}

	public function edit($id = null)
	{
		$query = $this->hardware->get($id);
		$data = array ('hardware' => $query->row());

        $this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar');
        $this->load->view('hardware/edit');
		$this->load->view('tamplates/footer');
	}

	public function del($id)
	{
		$this->hardware->del($id);
			redirect('hardware');
	}

	public function proses()
	{
		if(isset($_POST['add'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->hardware->add($inputan);

			// $ID_Barang = $this->input->post('ID_Barang');
			// $Nama = $this->input->post('Nama');
			// $Prosesor = $this->input->post('Prosesor');

			//echo $ID_Barang."<br>".$Nama."<br>".$Prosesor;
		} else if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->hardware->edit($inputan);
		}
		redirect('hardware');

	}

	public function view($id = '')
	{
		$data['view'] = $this->hardware->view($id);
		$data['tb_hardware'] = $this->hardware->get();	
		
		$this->load->view('tamplates/header', $data);
		$this->load->view('tamplates/sidebar');
        $this->load->view('hardware/view');
		$this->load->view('tamplates/footer');
	}

	public function view_add($id = '')
	{
		$query = $this->hardware->view_add();
		redirect('hardware/view/'.$id);
	}


}