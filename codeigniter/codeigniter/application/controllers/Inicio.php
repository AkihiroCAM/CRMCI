<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	//Pagina Principal - Es la que se mostrara primero.
	public function index()
	{
		$this->load->model('usuarios');
		$data['usuarios'] = $this->usuarios->get();
		$data['contenido'] = 'inicio';
		$this->load->view('estructura/template', $data);
	}

	// private function check_isvalidated(){
	//  	if(! $this->session->userdata('validated')){
	//  		redirect('login');
	//  	}
	//  }

	//  public function do_logout(){
	//  	$this->session->sess_destroy();
    //      redirect('login');
	//  }

	public function perfil(){
		$this->load->view('estructura/header');
		$this->load->view('perfil_usuario');
		$this->load->view('estructura/footer');
	}
}
