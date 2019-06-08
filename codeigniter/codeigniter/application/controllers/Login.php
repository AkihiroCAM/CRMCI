<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    //1 - auth/login
    //2 -
    class Login extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('modelo_login');
        }

        public function index($msg = NULL){
            $data['msg'] = $msg;
            $this->load->view('estructura/header');
            $this->load->view('login', $data);
        }

        public function validar(){
            $this->load->model('modelo_login');
            $res = $this->modelo_login->validar($_POST ['correo'], $_POST['contrasena']);
            if($res){
                $this->load->view('inicio');
                $this->session->start();
            }
            else{
                redirect('login');
            }
        }
    }

?>