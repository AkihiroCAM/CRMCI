<?php
    //Currently in development
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Contacto extends CI_Controller{
        public function index(){
            $this->load->model('personal_model');
            $data['personal_model'] = $this->personal_model->get();
            $data['contenido'] = 'contactos';
            $this->load->view('estructura/template', $data);
        }
    }
?>