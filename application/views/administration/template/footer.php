<div id="footer">
	<p>
		<!----------  ON DETRUIT LA SESSION QUAND ON RESTE INACTIF PENDANT UN CERTAIN TEMPS -->
		<?php //$this->load->view('timeout'); ?>
		
		<!----------  LIEN POUR QUE LES CONNECTES PUISSENT SE DECONNECTER -------------------->
		<?php
			//echo lien('connexion/connexion_controller/logout_controller', '<input type="button" value="Déconnexion" /> ('.$this->session->userdata('login').')','style="text-decoration:none";');
		?>
	</p>
</div>