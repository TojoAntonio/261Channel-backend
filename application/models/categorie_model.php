<?php

    class Categorie_model extends CI_Model{
        
        function insert($data){
            $this->db->insert('categorieage', $data);
        }
        
        function update($data, $id){
            $this->db->where('IDCATEGORIE', $id)
                     ->where('SUPPRIME',0);
            $this->db->update('categorieage', $data);
        }
        
        function delete($id){
            $this->db->where('IDCATEGORIE', $id)
                      ->where('SUPPRIME',0);
            $this->db->update('categorieage');
        }
        
        function getAll(){
            $res = $this->db->get('categorieage')
                             ->where('SUPPRIME',0);
            if($res->num_rows()>0){
                return $res->result();
            }
        }
        
        function get($id){
            $this->db->where('IDCATEGORIE', $id)
                     ->where('SUPPRIME',0);
            $res = $this->db->get('categorieage');
            if($res->num_rows()>0){
                return $res->result();
            }
        }
        
    }