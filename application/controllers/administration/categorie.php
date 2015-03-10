<?php

    class Categorie extends CI_Controller{
        
        function index(){
            $this->liste();
        }
        
        function liste(){
            $data['title'] = "Catégories de public";
            $this->load->model('categorie_model');
            $data['listecat'] = $this->categorie_model->getAll();
            $this->load->view('administration/categorie_liste', $data);
        }
        
        function traitement(){
            $btn = $this->input->post('bouton');
			$check = $this->input->post('chkbx');
			if($check)
			{
				if($btn=="Supprimer")
				{
				    $this->load->model('categorie_model');
					foreach($check as $id)
					{
						$this->categorie_model->delete($id);
					}
					redirect(site_url('administration/categorie'));
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
			else redirect(site_url('administration/categorie'));
        }
        
        function fiche(){
            if($this->input->post('submit')){
                if($this->input->post('libelle')!=""){
                    $data = array(
                        'CAT_LIBELLE' => $this->input->post('libelle')
                    );
                    $this->load->model('categorie_model');
                    $this->categorie_model->insert($data);
                }
                redirect(site_url('administration/categorie'));
            }
            else{
                $data['title'] = "Catégorie de public";
                $this->load->view('administration/categorie_fiche', $data);
            }
        }
        
    }