<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("usuarios");
        }
        public function index(){
            if($this->session->userdata("login")){
                redirect(base_url()."inicio");
            }
            else{
                $this->load->view('estructura/header');
                $this->load->view("login");
            }
        }
        public function login(){
            $correo = $this->input->post("correo");
            $contrasena = $this->input->post("contrasena");
            $res = $this->usuarios->login($correo, sha1($contrasena));

            if(!$res){
                redirect(base_url());
            }
            else{
                $data = array(
                    'id' => $res->id,
                    'nombre' => $res->nombre,
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($data);
                redirect(base_url()."inicio");
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect(base_url());
        }
    }
?>