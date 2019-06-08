<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Autos extends CI_Model{
        public function crear($marca, $modelo, $anio, $costo_total){
            $condiciones = [
                'marca' => $marca
            ];
            $resultSet = $this->db->where($condiciones)->get('vehiculo');
            if($resultSet->num_rows()){
                return false;
            }
            else{
                $valores = [
                    'marca' => $marca,
                    'modelo' => $modelo,
                    'anio' => $anio,
                    'costo_total' => $costo_total
                ];
                $this->db->insert('vehiculo', $valores);
                return true;
            }
        }

        public function get(){
            return $this->db->order_by('marca')->get('vehiculo');
        }

        public function delete($marca){
            $this->db->where('marca', $marca);
            $this->db->delete('vehiculo');
        }

        public function obtenerEnlace($marca){
            $this->db->where('marca', $marca);
            $query = $this->db->get('vehiculo');
            if($query->num_rows()>0){
                return $query;
            }
            else{
                return FALSE;
            }
        }

        public function editarEnlace($marca, $data){
            $this->db->where('marca', $marca);
            $this->db->update('vehiculo', $data);
        }

        public function search($q){
            return $this->db->like('modelo', $q)->get('vehiculo');
        }

        public function get_by_id($marca){
            $condiciones = [
                'marca' => $marca
            ];
            $resultSet = $this->db->where($condiciones)->get('vehiculo');
            if($resultSet->num_rows()){
                return $resultSet->row();
            }
            else{
                return false;
            }
        }
    }
?>