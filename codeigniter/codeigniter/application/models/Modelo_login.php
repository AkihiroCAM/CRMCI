<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Modelo_login extends CI_Model{
        // public function can_login($correo. $contrasena){
        //     $this->db->where('correo', $correo);
        //     $this->db->where('contrasena', $contrasena);
        //     $query =$this->db->get('usuario');
        //     if($query->num_rows() > 0)
        //     {
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // }
        public function __construct(){
            parent::__construct();
        }
        
        public function validar($correo, $contrasena){
            $condiciones = [
                'correo' => $correo,
                'contrasena' => md5($contrasena)
            ];

            $query = $this->db->get_where('usuario', $condiciones);
            if($query->fetch_assoc()){
                return true;
            }
            else{
                return false;
            }

            // // grab user input
            // $correo = $this->security->xss_clean($this->input->post('correo'));
            // $contrasena = $this->security->xss_clean($this->input->post('contrasena'));
            
            // // Prep the query
            // $this->db->where('correo', $correo);
            // $this->db->where('contrasena', $contrasena);
            
            // // Run the query
            // $query = $this->db->get('usuario');
            // // Let's check if there are any results
            // if($query->num_rows == 1)
            // {
            //     // If there is a user, then create session data
            //     $row = $query->row();
            //     $data = array(
            //             'id' => $row->id,
            //             'nombre' => $row->nombre,
            //             'correo' => $row->correo,
            //             'validated' => true
            //             );
            //     $this->session->set_userdata($data);
            //     return true;
            // }
            // // If the previous process did not validate
            // // then return false.
            // return false;
        }
    }
?>