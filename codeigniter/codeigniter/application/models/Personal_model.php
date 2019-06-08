<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Personal_model extends CI_Model {

        public function crear($nombre, $tipo, $estado, $pais, $correo, $contrasena){
            $condiciones = [
                'correo' => $correo
            ];
            $resultSet = $this->db->where($condiciones)->get('personal');
            if($resultSet->num_rows()){
                return false;
            }
            else{
            $valores = [
                'nombre' => $nombre,
                'tipo' => $tipo,
                'estado' => $estado,
                'pais' => $pais,
                'correo' => $correo,
                'contrasena' => md5($contrasena)
            ];
            $this->db->insert('personal', $valores);
            return true;
            }
        }

        public function get(){
            return $this->db->order_by('nombre')->get('personal');
        }

        public function delete($id){
            $this->db->where('id', $id);
            $this->db->delete('personal');
        }
        
        public function obtenerEnlace($id){
             $this->db->where('id', $id);
             $query = $this->db->get('personal');
             if ($query->num_rows()>0){
                 return $query;
             }
             else{
                 return FALSE;
             }
        }

        public function editarEnlace($id, $data){
            $this->db->where('id', $id);
            $this->db->update('personal', $data);
        }

        public function search($q){
            return $this->db->like('nombre', $q)->get('personal');
        }

        public function get_by_id($id){
            $condiciones = [
                'id' => $id
            ];
            $resultSet = $this->db->where($condiciones)->get('personal');
            if($resultSet->num_rows())
                return $resultSet->row();
            else
                return false;
        }
        
        public function login($correo, $contrasena){
            $this->db->where('correo', $correo);
            $this->db->where('contrasena', $contrasena);
            $q = $this->db->get('personal');
            if($q->num_rows()>0){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>