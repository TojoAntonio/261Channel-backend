<?php

    class Type_model extends CI_Model{
        
        function insert($data){
            $this->db->insert('typeemission', $data);
        }
        
        function update($data, $id){
            $this->db->where('IDTYPE', $id);
            $this->db->update('typeemission', $data);
        }
        
        function delete($id){
            $this->db->where('IDTYPE', $id);
            $this->db->delete('typeemission');
        }
        
        function getAll(){
            $res = $this->db->get('typeemission');
            if($res->num_rows()>0){
                return $res->result();
            }
        }
        
        function get($id){
            $this->db->where('IDTYPE', $id);
            $res = $this->db->get('typeemission');
            if($res->num_rows()>0){
                return $res->result();
            }
        }
        
    }