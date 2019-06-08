<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Correo extends CI_Controller {

    public function index(){
        //Por mientras solo tenemos la vista
        $this->load->view('estructura/header');
		$this->load->view('correo');
		$this->load->view('estructura/footer');
    }
}

?>