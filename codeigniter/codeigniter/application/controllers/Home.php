<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model('usuarios');
		$data['usuarios'] = $this->usuarios->get();
		$data['contenido'] = 'ejemplo';
		$data['nombre'] = 'Josue E. Pizano';
		$this->load->view('estructura/template', $data);
	}

	public function otra($nombre, $apellido){
		if($nombre == '' || $apellido == ''){
			$nombre = 'Cosme';
			$apellido = 'Fulanito';
		}
		$data['contenido'] = 'otra';
		$data['nombre'] = $nombre;
		$data['apellido'] = $apellido;
		$this->load->view('estructura/template', $data);
	}

	public function crear_usuario(){
		$this->load->model('usuarios');
		if($this->usuarios->crear($_GET['nombre'],
							$_GET['correo'],
							$_GET['contrasena'])) {
								$data['mensaje'] = 'El usuario fue insertado exitosamente. ';
							}
							else{
								$data['mensaje'] = 'La cuenta se encuentra duplicado. ';
							}
							$data['contenido'] = 'mensaje';
							$data['link'] = base_url();
							$this->load->view('estructura/template', $data);
	}
	public function edit($id){
		$this->load->model('usuarios');
		$this->usuarios->get_by_id($id);
		$data['contenido'] = 'mensaje';
		$data['link'] = base_url();
		$this->load->view('estructura/editar', $data);
	}
	
	public function borrar(){
		$this->usuarios->delete($id);
	}
}
