<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuentas extends CI_Controller {
    public function index(){
        //echo "Entraste a cuentas";
				$this->load->model('personal_model');
				$data['personal_model'] = $this->personal->get();
        $data['contenido'] = 'contactos';
        $this->load->view('estructura/template', $data);
    }

    //Este metodo da de alta a usuarios
	public function crear_usuario(){
		$this->load->model('personal_model');
		if($this->personal_model->crear($_GET['nombre'], $_GET['tipo'], $_GET['estado'], $_GET['pais'], $_GET['correo'], $_GET['contrasena'])) {
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
		$this->load->view('agregar_personal');
		$this->load->view('estructura/footer'); 
	}
    
    public function edit(){
		//cargar el modelo es importante al usarlo.
	 	$this->load->model('personal_model');
	 	$id = $this->uri->segment(3);
	 	$obtenerEnlace = $this->personal_model->obtenerEnlace($id);
	 	if($obtenerEnlace != FALSE){
	 		foreach ($obtenerEnlace->result() as $row){
                 $nombre = $row->nombre;
                 $tipo = $row->tipo;
                 $estado = $row->estado;
                 $pais = $row->pais;
	 			$correo = $row->correo;
	 		}
	 		$data = array(
	 			'id' => $id,
	 			'nombre' => $nombre,
                 'tipo' => $tipo,
                 'estado' => $estado,
                 'pais' => $pais,
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
            'tipo' => $this->input->post('tipo', true),
            'estado' => $this->input->post('estado', true),
            'pais' => $this->input->post('pais', true),
			'correo' => $this->input->post('correo', true)
		);
		$this->load->model('personal_model');
		$this->personal_model->editarEnlace($id, $data);
		redirect('contactos');
    }
    
    public function deleteUser(){
		$this->load->model('personal_model');
		$id = $this->uri->segment(3);
		$this->personal_model->delete($id);
		//Para resultados inmediatos, se redirecciona al inicio o ubicacion donde esta la tabla
		redirect('contactos');
	}
}

?>