<?php

class M_hardware extends CI_Model{

    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('tb_hardware');
        if($id != null) {
            $this->db->where('id_hardware', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    
    public function add($data)
    {
        $param = array(
            'nama_hardware' => $data['nama_hardware']
        );
        $this->db->insert('tb_hardware', $param);
    }

    public function edit($data)
    {
        $param = array(
            'nama_hardware' => $data['nama_hardware']
        );
        $this->db->set($param);
        $this->db->where('id_hardware', $data['id']);
        $this->db->update('tb_hardware');
    }

    public function del($id)
    {
        $this->db->where('id_hardware', $id);
        $this->db->delete('tb_hardware');

    }

    public function view($id)
    {
        $this->db->select('*');
        $this->db->from('tb_hardware');
        $this->db->join('view_laptop','view_laptop.jenis=tb_hardware.id_hardware');
        $this->db->where('tb_hardware.id_hardware',$id);
        $query = $this->db->get();
        return $query->result();
    }

    public function view_add()
    {
        $data = [
            'jenis' => $this->input->post('jenis'),
            'merk' => $this->input->post('merk'), 
        ];

        $this->db->insert('view_laptop', $data);
    }
}