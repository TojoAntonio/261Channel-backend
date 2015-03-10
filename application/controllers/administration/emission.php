<?php

    class Emission extends CI_Controller{

        function index(){
            $this->liste();
        }
        
        function liste(){
            $data['title'] = "Liste des émissions";
            $this->load->model('emission_model');
            $data['emissions'] = $this->emission_model->getAll();
            $this->load->view('administration/emission_liste', $data);
        }
        
        function simple(){
            if($this->input->post('upload')){
                $titre = $this->input->post('titre');
                $duree = $this->input->post('duree');
                $chemin = $_FILES['userfile']['name'];
                $idcat = $this->input->post('categ');
                $idtyp = $this->input->post('typ');
                if($titre!="" && intval($duree)>0 && $chemin!=""){
                    $data = array(
                        'idcategorie' => $idcat,
                        'idtype' => $idtyp,
                        'e_nom' => $titre,
                        'e_duree' => $duree,
                        'e_chemin' => $chemin
                    );
                    $this->load->model('emission_model');
                    $this->emission_model->insert($data);
                    redirect(site_url('administration/emission'));
                }
                else erreur("Veillez à ce que chaque champ ait été rempli");
            }else{
                $data['title'] = "Emission simple";
                $this->load->model('categorie_model');
                $this->load->model('type_model');
                $data['categories'] = $this->categorie_model->getAll();
                $data['types'] = $this->type_model->getAll();
                $this->load->view('administration/emission_simple', $data);
            }
        }
        
        function composee(){
            if($this->input->post('valid')){
                $titre = $this->input->post('titre');
                $categ = $this->input->post('categ');
                $typ = $this->input->post('typ');
                $emissions = $this->input->post('chkbx');
                if($titre!="" && count($emissions)>0){
                    $this->load->model('emission_model');
                    $duree = 0;
                    foreach($emissions as $id){
                        $em = $this->emission_model->get($id);
                        foreach($em as $ligne){
                            $duree += intval($ligne->E_DUREE);
                        }
                    }
                     
                    $data = array(
                        'idcategorie' => $categ,
                        'idtype' => $typ,
                        'e_nom' => $titre,
                        'e_duree' => $duree,
                        'e_zanaka' => tabToString($emissions)
                    );
                    $this->emission_model->insert_composee($data);
                    $this->liste();
                }
                else erreur("Veillez à ce que chaque champ ait été rempli");
            }
            else{
                $data['title'] = "Emission composée";
                $this->load->model('emission_model');
                $this->load->model('categorie_model');
                $this->load->model('type_model');
                $data['emissions'] = $this->emission_model->getAllSimple();
                $data['categories'] = $this->categorie_model->getAll();
                $data['types'] = $this->type_model->getAll();
                $this->load->view('administration/emission_composee', $data);
                
            }
        }
        
        function previsualisation(){
            $data['title'] = "Visualisation des émissions";
            $this->load->model('emission_model');
            $emissions = $this->emission_model->getAllSimple();
            $data['emissions'] = $emissions;
            $data['code'] = "";
            $style = "
            <style>
				#video_player {
				  width:auto;
                  height: 500px;
                  max-height:500px;
				  margin: 0 auto;
				}
				#video_container { 
				  position: relative;
				}
				#video_player div, #video_player figcaption { 
				  display: table-cell;
				  vertical-align: top; 
				}
				#video_container video { 
                    position: absolute; 
                    display: block;
                    width: 100%;
                    height: auto;
                    top: 0;
				}
				#video_player figcaption { width: 25%;}
				#video_player figcaption a { display: block; }
				#video_player figcaption a { 
                    opacity: .5;
                    transition: 1s opacity; 
				}
				#video_player figcaption a img, figure video { 
                    width: 100%;
                    height: auto;
				}
				#video_player figcaption a.currentvid, #video_player figcaption a:hover, #video_player figcaption a:focus { opacity: 1; }
				@media (max-width: 700px) {
                    #video_player video, #video_player figcaption { 
                        display: table-row;
                    }
                    #video_container { padding-top: 56.25%; }
                    #video_player figcaption a { 
                        display: inline-block; width: 33.33%; max-height:50px;
                    }
				}
			</style>
            ";
            
            $javascript = "
            <script>
				var video_player = document.getElementById('video_player');
				video = video_player.getElementsByTagName('video')[0],
				video_links = video_player.getElementsByTagName('figcaption')[0],
				source = video.getElementsByTagName('source'),
				link_list = [],
				vidDir = '".base_url().'assets/videos/'."',
				currentVid = 0,
				allLnks = video_links.children,
				lnkNum = allLnks.length;
				video.removeAttribute('controls');
				video.removeAttribute('poster');

				(function() {
				function playVid(index) {
				 video_links.children[index].classList.add('currentvid');
					source[0].src = vidDir + link_list[index] + \".mp4\";
					currentVid = index;
					video.load();
					video.play();
				}

				for (var i=0; i<lnkNum; i++) {
				var filename = allLnks[i].href;
				link_list[i] = filename.match(/([^\/]+)(?=\.\w+$)/)[0];
				(function(index){
						allLnks[i].onclick = function(i){
						i.preventDefault();  
						for (var i=0; i<lnkNum; i++) {
						allLnks[i].classList.remove('currentvid');
						}
						playVid(index);
						}    
					})(i);
				}
				video.addEventListener('ended', function () {
					allLnks[currentVid].classList.remove('currentvid');
					if ((currentVid + 1) >= lnkNum) {
					   video.stop();
                    }
                    else {
                        nextVid = currentVid+1;
                    }
					playVid(nextVid);
				})

				video.addEventListener('mouseenter', function() {
					video.setAttribute('controls','true');
				})

				video.addEventListener('mouseleave', function() {
					video.removeAttribute('controls');
				})

				var indexOf = function(needle) {
					if(typeof Array.prototype.indexOf === 'function') {
						indexOf = Array.prototype.indexOf;
					} else {
						indexOf = function(needle) {
							var i = -1, index = -1;
							for(i = 0; i < this.length; i++) {
								if(this[i] === needle) {
									index = i;
									break;
								}}
							return index;
						};}
					return indexOf.call(this, needle);
				};
					var focusedLink = document.activeElement;
					index = indexOf.call(allLnks, focusedLink);
					
				document.addEventListener('keydown', function(e) {
				if (index) {
					var focusedElement = document.activeElement;
					if (e.keyCode == 40 || e.keyCode == 39) { // down or right cursor
					var nextNode = focusedElement.nextElementSibling;
					if (nextNode) { nextNode.focus(); } else { video_links.firstElementChild.focus(); }
					}
				   if (e.keyCode == 38 || e.keyCode == 37) { // up or left cursor
					var previousNode = focusedElement.previousElementSibling;
					if (previousNode) { previousNode.focus(); } else { video_links.lastElementChild.focus(); }
					}
				 }
				});

				})();  

			</script>
            ";
            
            $data['code'] .= $style;
            $data['code'] .= "
                <figure id='video_player'>
					<div id='video_container'>
						<video controls poster='' autoplay='true'>
                            <source src='".$emissions[0]->E_CHEMIN."' type='video/mp4'>
						</video>
					</div>
					<figcaption>
                    ";
            
            foreach($emissions as $row){
                $data['code'] .= '<a href="'.$row->E_CHEMIN.'" class="currentvid">';
                $data['code'] .= $row->E_NOM.' ('.$row->E_DUREE.' sec)</a>';
            }
            
            $data['code'] .= "
                    </figcaption>
				</figure>
            ";
            
            $data['code'] .= $javascript;
            
            $this->load->view('administration/emission_previsualisation', $data);
        }
        
        function suppression(){
            if($this->input->post('suppr') && $this->input->post('chkbx')){
                $check = $this->input->post('chkbx');
                if(count($check)>0){
                    foreach($check as $id){
                        $this->load->model('emission_model');
                        $this->emission_model->delete($id);
                    }
                    $this->liste();
                }
            }
            else erreur("Aucun élément n'a été coché");
        }

    }