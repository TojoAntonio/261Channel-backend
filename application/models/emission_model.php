<?php

class Emission_model extends CI_Model {

    function insert($data){
        $path = 'assets/videos';
        $abs_path = str_replace('system/',$path, BASEPATH);
        $abs_path = preg_replace("#([^/])/*$#", "\\1/", $abs_path);
        $video_path = $abs_path;
        $video_name = $this->upload_video($video_path);
        if($video_name!=""){
            $data['e_chemin'] = base_url($path.'/'.$video_name);
            $this->db->insert('emission', $data);
        }
    }
        
        function upload_video($video_path){            
            $config = array(
                'allowed_types' => 'mp4',
                'max_size' => 8000000,
                'upload_path' => $video_path,
                'encrypt_name' => true
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload()){
                $upload = $this->upload->data();
                return $upload['file_name'];
            }
            return "";
        }
        
        function upload_pochette($video_path){            
            $config = array(
                'allowed_types' => 'jpg|jpeg|png|gif',
                'max_size' => 8000000,
                'upload_path' => $video_path,
                'encrypt_name' => true
            );
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $upload = $this->upload->data();
            return $upload['file_name'];
        }
        
    function insert_composee($data){
        $this->db->insert('emission', $data);
    }
    
    function update($data, $id){
        $this->db->where('IDEMISSION', $id);
        $this->db->update('emission', $data);
    }
    
    function delete($id){
        $data = $this->get($id);
        if(count($data)>0){
            foreach($data as $key){
                $path = str_replace(site_url(),'',$key->E_CHEMIN);
                if(file_exists($path)){
                    unlink($path); // need relative path
                }
                $data=array(
                    'SUPPRIME' => 1
                );
                $this->db->where('IDEMISSION', $id);
                $this->db->update('emission',$data);
            }
        }
    }
    
    function getAll(){
        $res = $this->db->get('emission')
                        ->where('SUPPRIME',0);
        if($res->num_rows()>0){
            return $res->result();
        }
    }
    
    function getAllSimple(){
        $this->db->where('E_ZANAKA', NULL);
        $res = $this->db->get('emission')
            ->where('SUPPRIME',0);
        if($res->num_rows()>0){
            return $res->result();
        }
    }
    
    function get($id){
        $this->db->where('IDEMISSION', $id)
                ->where('SUPPRIME',0);
        $res = $this->db->get('emission');
        if($res->num_rows()>0){
            return $res->result();
        }
    }

}