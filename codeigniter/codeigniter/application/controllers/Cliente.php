<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
    public function index(){
        //echo "Entraste a cuentas";
        $this->load->model('cliente_model');
        $data['cliente_model'] = $this->cliente_model->get();
        $data['contenido'] = 'cuentas_todas';
        $this->load->view('estructura/template', $data);
    }

    //Este metodo da de alta a usuarios
	public function crear_usuario(){
		$this->load->model('cliente_model');
		if($this->cliente_model->crear($_GET['nombre_com'], $_GET['rfc'], $_GET['edad'], $_GET['prob_venta'], $_GET['estado'], $_GET['correo'], $_GET['contrasena'])) {
			$data['mensaje'] = 'El usuario fue insertado exitosamente. ';
		}
		else{
			$data['mensaje'] = 'La cuenta se encuentra duplicado. ';
		}
		$data['contenido'] = 'mensaje';
		$data['link'] = base_url();
		$this->load->view('estructura/template', $data);
    }

    //Este metodo te direcciona a una pagina para ingresar datos
	public function agregarCliente(){
		$this->load->view('estructura/header');
		$this->load->view('agregar_cliente');
		$this->load->view('estructura/footer'); 
	}
    
    public function edit(){
		//cargar el modelo es importante al usarlo.
	 	$this->load->model('cliente_model');
	 	$id = $this->uri->segment(3);
	 	$obtenerEnlace = $this->cliente_model->obtenerEnlace($id);
	 	if($obtenerEnlace != FALSE){
	 		foreach ($obtenerEnlace->result() as $row){
                 $nombre_com = $row->nombre_com;
                 $rfc = $row->rfc;
                 $edad = $row->edad;
                 $prob_venta = $row->prob_venta;
                 $estado = $row->estado;
                 $correo = $row->correo;
	 		}
	 		$data = array(
	 			'id' => $id,
                 'nombre_com' => $nombre_com,
                 'rfc' => $rfc,
                 'edad' => $edad,
                 'prob_venta' => $prob_venta,
                 'estado' => $estado,
                 'correo' => $correo
	 		);
	 	}
	 	else{
			$data = '';
	 		return FALSE;
	 	}
	 	$this->load->view('estructura/header');
	 	$this->load->view('editar_cliente', $data);
    }
    
    public function editarEnlace(){
		$id = $this->uri->segment(3);
		$data = array(
			'nombre_com' => $this->input->post('nombre_com', true),
            'rfc' => $this->input->post('rfc', true),
            'edad' => $this->input->post('edad', true),
            'prob_venta' => $this->input->post('prob_venta', true),
            'estado' => $this->input->post('estado', true),
            'correo' => $this->input->post('correo', true)
		);
		$this->load->model('cliente_model');
		$this->cliente_model->editarEnlace($id, $data);
		redirect('cuentas');
    }
    
    public function deleteUser(){
		$this->load->model('cliente_model');
		$id = $this->uri->segment(3);
		$this->cliente_model->delete($id);
		//Para resultados inmediatos, se redirecciona al inicio o ubicacion donde esta la tabla
		redirect('cuentas');
	}
}

?>