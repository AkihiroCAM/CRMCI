<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Usuarios extends CI_Model {

        //==========PARA USUARIO=============
        public function crear($nombre, $correo, $contrasena){
            $condiciones = [
                'correo' => $correo
            ];
            $resultSet = $this->db->where($condiciones)->get('usuario');
            if($resultSet->num_rows()){
                return false;
            }
            else{
            $valores = [
                'nombre' => $nombre,
                'correo' => $correo,
                'contrasena' => md5($contrasena)
            ];
            $this->db->insert('usuario', $valores);
            return true;
            }
        }

        public function get(){
            return $this->db->order_by('nombre')->get('usuario');
        }

        public function delete($id){
            $this->db->where('id', $id);
            $this->db->delete('usuario');
        }
        
        public function obtenerEnlace($id){
             $this->db->where('id', $id);
             $query = $this->db->get('usuario');
             if ($query->num_rows()>0){
                 return $query;
             }
             else{
                 return FALSE;
             }
        }

        public function editarEnlace($id, $data){
            $this->db->where('id', $id);
            $this->db->update('usuario', $data);
        }

        public function search($q){
            return $this->db->like('nombre', $q)->get('usuario');
        }

        public function get_by_id($id){
            $condiciones = [
                'id' => $id
            ];
            $resultSet = $this->db->where($condiciones)->get('usuario');
            if($resultSet->num_rows())
                return $resultSet->row();
            else
                return false;
        }
        
        // public function login($correo, $contrasena){
        //     $this->db->where('correo', $correo);
        //     $this->db->where('contrasena', $contrasena);
        //     $q = $this->db->get('usuario');
        //     if($q->num_rows()>0){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // }

        public function login(){
            if($this->input->post('login')){
                $correo=$this->input->post('correo');
                $contrasena=$this->input->post('contrasena');

                $q=$this->db->query("SELECT * FROM usuario WHERE correo='".$correo."' AND contrasena='.$contrasena.'");
                $row=$q->num_rows();
                if($row){
                    redirect(base_url());
                }
                else{
                    $data['error']="<h3 style='color:red'>Invalid login details</h3>";
                }
            }
            $this->load->view('login',@$data);
        }

        //==========PARA CLIENTE================


        // public function login($correo, $contrasena){
        //     $this->db->where("correo", $correo);
        //     $this->db->where("contrasena", $contrasena);
        //     $resultados = $this->db->get("usuario");
        //     if($resultados->num_rows() > 0){
        //         return $resultados->row();
        //     }
        //     else{
        //         return false;
        //     }
        // }
    }
?>
