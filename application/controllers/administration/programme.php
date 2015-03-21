<?php

    class Programme extends CI_Controller{
        
        function index(){
            $this->liste();
        }
        
        function liste(){
            $data['title'] = "Liste des programmes";
            $this->load->model('programme_model');
            $data['programmes'] = $this->programme_model->getAll();
            $this->load->view('administration/programme_liste', $data);
        }
        
        function creation(){
            if($this->input->post('save')){
                $this->load->model('programme_model');
                $data = array(
                    'p_date' => $this->input->post('daty'),
                    'hdebut' => $this->input->post('hdebut'),
                    'hfin' => $this->input->post('hfin')
                );
                $this->programme_model->insert($data);
                $this->liste();
            }
            else{
                $data['title'] = "Création de programme";
                $this->load->view('administration/programme_fiche', $data);
            }
        }
        
        function choix_programme(){
            if($this->input->post('submit') && $this->input->post('radiobtn')){
                $sel = $this->input->post('radiobtn');
                
                $this->load->model('programme_model');
                $data['prog'] = $this->programme_model->get($sel);
                
                $data['emissions'] = $this->programme_model->creation();
                
                $data['title'] = "Ajout d'émission au programme";
                $this->load->view('administration/element_programme', $data);
            }
            else if($this->input->post('lancer') && $this->input->post('radiobtn')){
                $this->preview($this->input->post('radiobtn'));
            }
            else $this->liste();
        }
        
        function ajout_element(){
            if($this->input->post('submit') && $this->input->post('idemission')){
                $this->load->model('programme_model');
                $data = array(
                    'idemission' => $this->input->post('idemission'),
                    'idprogramme' => $this->input->post('idprog'),
                    'heure_diffusion' => ''
                );
                $this->programme_model->addElement($data);
                $this->liste();
            }
            else echo '<script>history.go(-1);</script>';
        }
        
        function preview($idprog){
            $this->load->model('programme_model');
            $emissions = $this->programme_model->emission_programme($idprog);
            if(count($emissions)>0):
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
    				#video_player figcaption a { display: block; visibility:hidden; }
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
                    
                    $('#btn').click(function(){
                        if(video.webkitRequestFullscreen) video.webkitRequestFullscreen();
                        else if(video.mozRequestFullscreen) video.mozRequestFullscreen();
                        else if(video.requestFullscreen) video.requestFullscreen();
                    });
                    
                    $(function() {
                        $(video).bind('contextmenu', function(e) {
                            e.stopPropagation();
                            e.preventDefault();
                            e.stopImmediatePropagation();
                        });
                    });
    
    				(function() {
    				function playVid(index) {
    				    $('#mavideo').css('min-width:400px');
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
    					//video.setAttribute('controls','true');
    					video.removeAttribute('controls');
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
                        <input type='button' id='btn' value='plein écran' /><br/><br/>
    					<div id='video_container'>
    						<video controls poster='' autoplay='true' id='mavideo'>
                                <source src='".$emissions[0]['chemin']."' type='video/mp4'>
    						</video>
    					</div>
    					<figcaption>
                        ";
                
                foreach($emissions as $row){
                    $data['code'] .= '<a href="'.$row['chemin'].'" class="currentvid">';
                    $data['code'] .= $row['titre'].' (0 sec)</a>';
                }
                
                $data['code'] .= "
                        </figcaption>
    				</figure>
                ";
                
                $data['code'] .= $javascript;
            else :
                $data['code'] = '
                    <p>Ce programme ne contient aucune émission</p>
                    <br/>
                    <input type="button" onclick="javascript:history.go(-1);" value="Retour" style="width:150px;height:25px;" />
                ';
            endif;
            $data['title'] = "Prévisualisation du programme";
            $this->load->view('administration/emission_previsualisation', $data);
        }
        
        function emissions($idprog){
            $this->load->model('programme_model');
            $data = $this->programme_model->emission_programme($idprog);
            $res = '
                <table border="1">
                    <tr>
                        <th>Titre</th>
                        <th>Type</th>
                        <th>Catégorie</th>
                    </tr>
                ';
            if(count($data)>0){
                foreach($data as $row){
                    $res .= '
                    <tr>
                        <td>'.$row['titre'].'</td>
                        <td>'.$row['type'].'</td>
                        <td>'.$row['categorie'].'</td>
                    </tr>
                    ';
                }
            }
            else $res .= '
                    <tr>
                        <td colspan="3" align="center">Aucune émission n\'a encore été ajoutée</td>
                    </tr>
                ';
            
            $res .= '</table>';
            echo $res;
        }
        
    }