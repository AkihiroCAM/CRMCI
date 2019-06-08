<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuentas extends CI_Controller {
    public function index(){
				//echo "Entraste a cuentas";
				$this->load->model('cliente_model');
				$this->load->model('autos');
				$data['cliente_model'] = $this->cliente_model->get();
				$data['autos'] = $this->autos->get();
        $data['contenido'] = 'cuentas_todas';
        $this->load->view('estructura/template', $data);
    }

    //Este metodo da de alta a usuarios
	public function crear_usuario(){
		$this->load->model('usuarios');
		if($this->usuarios->crear($_GET['nombre'], $_GET['correo'], $_GET['contrasena'])) {
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
	public function agregarUsuario(){
		$this->load->view('estructura/header');
		$this->load->view('agregar_usuario');
		$this->load->view('estructura/footer'); 
	}
    
    public function edit(){
		//cargar el modelo es importante al usarlo.
	 	$this->load->model('usuarios');
	 	$id = $this->uri->segment(3);
	 	$obtenerEnlace = $this->usuarios->obtenerEnlace($id);
	 	if($obtenerEnlace != FALSE){
	 		foreach ($obtenerEnlace->result() as $row){
	 			$nombre = $row->nombre;
	 			$correo = $row->correo;
	 		}
	 		$data = array(
	 			'id' => $id,
	 			'nombre' => $nombre,
	 			'correo' => $correo
	 		);
	 	}
	 	else{
			$data = '';
	 		return FALSE;
	 	}
	 	$this->load->view('estructura/header');
	 	$this->load->view('editar_usuario', $data);
    }
    
    public function editarEnlace(){
		$id = $this->uri->segment(3);
		$data = array(
			'nombre' => $this->input->post('nombre', true),
			'correo' => $this->input->post('correo', true)
		);
		$this->load->model('usuarios');
		$this->usuarios->editarEnlace($id, $data);
		redirect('cuentas');
    }
    
    public function deleteUser(){
		$this->load->model('usuarios');
		$id = $this->uri->segment(3);
		$this->usuarios->delete($id);
		//Para resultados inmediatos, se redirecciona al inicio o ubicacion donde esta la tabla
		redirect('home');
	}
}

?>