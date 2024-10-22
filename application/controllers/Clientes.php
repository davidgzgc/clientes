<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Clientes_model');
    }

    public function index() {
        $data['clientes'] = $this->Clientes_model->obtener_clientes();
        $this->load->view('Clientes/index', $data);
    }

    public function crear() {
        if ($this->input->post()) {
            $data = array(
                'nit' => $this->input->post('nit'),
                'dpi' => $this->input->post('dpi'),
                'nombre' => $this->input->post('nombre'),
                'apelldio' => $this->input->post('apellido'),
                'apellido_casada' => $this->input->post('apellido_casada'),
                'direcion' => $this->input->post('direcion'),
                'correo_electronico' => $this->input->post('correo_electronico'),
                'nacionalidad' =>$this->input->post('nacionalidad'),
                'numero_telefonico' =>$this->input->post('numero_telefonico')

            );
            $this->Clientes_model->crear_clientes($data);
            redirect('clientes');
        }
        $this->load->view('Clientes/crear');
    }

    public function editar($id) {
        $data['clientes'] = $this->Clientes_model->obtener_clientes($id);
        
        if ($this->input->post()) {
            $dataUpdate = array(
              
                'nit' => $this->input->post('nit'),
                'dpi' => $this->input->post('dpi'),
                'nombre' => $this->input->post('nombre'),
                'apelldio' => $this->input->post('apellido'),
                'apellido_casada' => $this->input->post('apellido_casada'),
                'direcion' => $this->input->post('direcion'),
                'correo_electronico' => $this->input->post('correo_electronico'),
                'nacionalidad' =>$this->input->post('nacionalidad'),
                'numero_telefonico' =>$this->input->post('numero_telefonico')
                




                
            );
            $this->Clientes_model->actualizar_clientes($id, $dataUpdate);
            redirect('clientes');
        }
        
        $this->load->view('clientes/editar', $data);
    }

    public function eliminar($id) {
        $this->Clientes_model->eliminar_clientes($id);
        redirect('clientes');
    }
}