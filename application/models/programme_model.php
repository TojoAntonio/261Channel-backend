<?php

    class Programme_model extends CI_Model{
        
        function creation(){
            $res = $this->db->query('select * from emission e join categorieage c on e.IDCATEGORIE = c.IDCATEGORIE join typeemission t on e.IDTYPE = t.IDTYPE');
            foreach($res->result() as $key){
                $data[] = array(
                    'id' => $key->IDEMISSION,
                    'titre' => $key->E_NOM,
                    'type' => $key->T_LIBELLE,
                    'categorie' => $key->CAT_LIBELLE
                );
            }
            return $data;
        }
                
        function insert($data){
            $this->db->insert('programme', $data);
        }
        
            function addElement($data){
                $this->db->insert('programmeemission', $data);
            }
        
        function update($data){
            
        }
        
        function getAll(){
            $res = $this->db->get('programme');
            foreach($res->result() as $row){
                $data[] = array(
                    'id' => $row->IDPROGRAMME,
                    'daty' => $row->P_DATE
                );
            }
            return $data;
        }
        
        function get($id){
            $this->db->where('IDPROGRAMME', $id);
            $res = $this->db->get('programme');
            foreach($res->result() as $row){
                $data[] = array(
                    'id' => $row->IDPROGRAMME,
                    'daty' => $row->P_DATE
                );
            }
            return $data;
        }
        
        function emission_programme($idprog){
            $req1 = 'select idemission from programmeemission where idprogramme='.$idprog;
            $req2 = 'select * from emission e join categorieage c on e.IDCATEGORIE = c.IDCATEGORIE join typeemission t on e.IDTYPE = t.IDTYPE where idemission in ('.$req1.')';
            $res = $this->db->query($req2);
            if($res->num_rows>0):
                foreach($res->result() as $key){
                    $data[] = array(
                        'id' => $key->IDEMISSION,
                        'titre' => $key->E_NOM,
                        'type' => $key->T_LIBELLE,
                        'categorie' => $key->CAT_LIBELLE,
                        'chemin' => $key->E_CHEMIN
                    );
                }
                return $data;
            endif;
        }
        
    }