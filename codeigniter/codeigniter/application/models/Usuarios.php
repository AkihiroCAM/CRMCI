<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Usuarios extends CI_Model {
        public function test(){
            $condiciones = [
                'id' => 1,
                'nombre' => 'Josue'
            ];
            return $this->db->where('id', '1')->get('usuario');
        }

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
            $condiciones = [
                'id' => $id
            ];
            $this->db->where($condiciones)->delete('usuario');
        }

        public function update($id, $nombre, $correo, $contrasena){
            $condiciones = [
                'id' => $id
            ];
            $valores = [
                'nombre' => $nombre,
                'correo' => $correo,
                'contrasena' => md5($contrasena)
            ];
            $this->db->where($condiciones)->update('usuario', $valores);
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
    }
?>
