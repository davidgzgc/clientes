<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		$this->load->database();
    }

    public function obtener_clientes() {
        return $this->db->get('clientes')->result();
    }

    
    public function obtener_cliente($id) {
        $query = $this->db->get_where('clientes', array('id' => $id));
        return $query->row();
        
    }


    public function crear_clientes($data) {
        return $this->db->insert('clientes', $data);
    }

    public function actualizar_clientes($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('clientes', $data);
    }

    public function eliminar_clientes($id) {
        return $this->db->delete('clientes', array('id' => $id));
    }
}
