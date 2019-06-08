<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Cliente_model extends CI_Model {

        //==========PARA USUARIO=============
        public function crear($nombre_com, $rfc, $edad, $prob_venta, $estado, $correo, $contrasena){
            $condiciones = [
                'correo' => $correo
            ];
            $resultSet = $this->db->where($condiciones)->get('cliente');
            if($resultSet->num_rows()){
                return false;
            }
            else{
            $valores = [
                'nombre_com' => $nombre_com,
                'rfc' => $rfc,
                'edad' => $edad,
                'prob_venta' => $prob_venta,
                'estado' => $estado,
                'correo' => $correo,
                'contrasena' => md5($contrasena)
            ];
            $this->db->insert('cliente', $valores);
            return true;
        }
        }

        public function get(){
            return $this->db->order_by('nombre_com')->get('cliente');
        }

        public function delete($id){
            $this->db->where('id', $id);
            $this->db->delete('cliente');
        }
        
        public function obtenerEnlace($id){
             $this->db->where('id', $id);
             $query = $this->db->get('cliente');
             if ($query->num_rows()>0){
                 return $query;
             }
             else{
                 return FALSE;
             }
        }

        public function editarEnlace($id, $data){
            $this->db->where('id', $id);
            $this->db->update('cliente', $data);
        }

        public function search($q){
            return $this->db->like('nombre_com', $q)->get('cliente');
        }

        public function get_by_id($id){
            $condiciones = [
                'id' => $id
            ];
            $resultSet = $this->db->where($condiciones)->get('cliente');
            if($resultSet->num_rows())
                return $resultSet->row();
            else
                return false;
        }
        
        public function login($correo, $contrasena){
            $this->db->where('correo', $correo);
            $this->db->where('contrasena', $contrasena);
            $q = $this->db->get('cliente');
            if($q->num_rows()>0){
                return true;
            }
            else{
                return false;
            }
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
