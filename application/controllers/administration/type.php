<?php

    class Type extends CI_Controller{
        
        function index(){
            $this->liste();
        }
        
        function liste(){
            $data['title'] = "Types d'émission";
            $this->load->model('type_model');
            $data['listecat'] = $this->type_model->getAll();
            $this->load->view('administration/type_liste', $data);
        }
        
        function traitement(){
            $btn = $this->input->post('bouton');
			$check = $this->input->post('chkbx');
			if($check)
			{
				if($btn=="Supprimer")
				{
				    $this->load->model('type_model');
					foreach($check as $id)
					{
						$this->type_model->delete($id);
					}
					redirect(site_url('administration/type'));
				}
				/*else if($btn=="Modifier")
				{					
					if(count($check)==1){
						foreach($check as $id)
						{
							$this->db->where('id', $id);
							$activite = $this->db->get('activite');
							$data['id'] = $id;
							foreach($activite->result() as $ligne)
							{
								$data['libelle'] = $ligne->libelle;
								$data['description'] = $ligne->description;
							}
							$this->load->view('back/activite/modif_vue', $data);
						}
					}
					else redirect(site_url('administration/categorie'));
					
				}*/
			}
			else redirect(site_url('administration/type'));
        }
        
        function fiche(){
            if($this->input->post('submit')){
                if($this->input->post('libelle')!=""){
                    $data = array(
                        'T_LIBELLE' => $this->input->post('libelle')
                    );
                    $this->load->model('type_model');
                    $this->type_model->insert($data);
                }
                redirect(site_url('administration/type'));
            }
            else{
                $data['title'] = "Type d'émission";
                $this->load->view('administration/type_fiche', $data);
            }
        }
        
    }