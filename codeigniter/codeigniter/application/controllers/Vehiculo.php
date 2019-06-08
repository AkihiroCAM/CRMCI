<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Vehiculo extends CI_Controller{
        public function index(){
            $this->load->view('estructura/header');
            $this->load->view('registro_auto');
        }

        public function crear_vehiculo(){
            $this->load->model('autos');
            if($this->autos->crear($_GET['marca'], $_GET['modelo'], $_GET['anio'], $_GET['costo_total'])){
                $data['mensaje'] = 'El vehiculo fue registrado con exito.';
            }
            else{
                $data['mensaje']='Este auto ya fue registrado. ';
            }
            $data['contenido'] = 'mensaje';
		    $data['link'] = base_url();
		    $this->load->view('estructura/template', $data);
        }

        public function edit(){
            $this->load->model('autos');
	 	    $marca = $this->uri->segment(3);
	 	    $obtenerEnlace = $this->autos->obtenerEnlace($marca);
	 	    if($obtenerEnlace != FALSE){
	 		    foreach ($obtenerEnlace->result() as $row){
                    $marca = $row->marca;
	 			    $modelo = $row->modelo;
                    $anio = $row->anio;
                    $costo_total = $row->costo_total; 
	 		    }
	 		    $data = array(
	 			    'marca' => $marca,
	 			    'modelo' => $modelo,
                    'anio' => $anio,
                    'costo_total' => $costo_total
	 		    );
	 	    }
	 	    else{
			    $data = '';
	 		    return FALSE;
	 	    }
	 	    $this->load->view('estructura/header');
	 	    $this->load->view('editar_vehiculo', $data);
        }

        public function editarEnlace(){
            $marca = $this->uri->segment(3);
            $data = array(
                'marca' => $this->input->post('marca', true),
                'modelo' => $this->input->post('modelo', true),
                'anio' => $this->input->post('anio', true),
                'costo_total' => $this->input->post('costo_total', true)
            );
            $this->load->model('autos');
            $this->usuarios->editarEnlace($marca, $data);
            redirect('home');  
        }

        public function deleteAuto(){
            $this->load->model('autos');
            $marca = $this->uri->segment(3);
            $this->autos->delete($marca);
            redirect('home');
        }
    }
?>