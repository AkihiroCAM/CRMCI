<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Bandeja extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function sendMailGmail(){
            $this->load->library("email");
            $configGmail = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'tucorreo@gmail.com',
                'smtp_pass' => 'tucontraseña',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            );
            $this->email->initialize($configGmail);
            $this->email->from('tucorreo@gmail.com');
            $this->email->to("tucorreo@gmail.com");
            $this->email->subject('Esto es una prueba á');
            $this->email->message('<h2>Correo con imagen</h2>');
            for ($i=1; $i <=1 ; $i++) { 
                if ($this->email->send()) {
                    echo "Enviado by litokurt";
                }else{
                    show_error($this->email->print_debugger());
                }
                sleep(1);
            }
        }

        // public function index(){
        //     $this->load->view('estructura/header');
        //     $this->load->view('estructura/wipdummy');
        // }

        // public function sendMail(){
        //     $this->load->library('email');
        //     $configuraciones['mailtype'] = 'html';
        //     $this->email->initialize($configuraciones);
        //     $this->email->from('ejemplo@autodavid.com', 'David Figueroa');
        //     $this->email->to('cesarakuhiro10@gmail.com');
        //     $this->email->cc('otrocorreo@gmail.com');
        //     $this->email->subject('Probando CodeIgniter');
        //     $this->email->message('<strong>Probando...</strong>');

        //     if($this->email->send()){
        //         echo "Correo enviado";
        //     }
        //     else{
        //         echo $this->email->print_debugger();
        //     }
        // }
    }
?>