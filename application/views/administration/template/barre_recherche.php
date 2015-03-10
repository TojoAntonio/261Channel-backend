<div class="searchform">
	<form id="formsearch" name="formsearch" method="post" action="<?php echo site_url('back/recherche') ?>">
	  Rechercher un 
	  <select name="colonne" style="width: 200px;">
		<option selected value="nom" >nom</option>
		<option value="prenom" >prenom</option>
		<option value="login" >login</option>
	  </select> d'utilisateur.
	  <br><br>
	  <span>
	  <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" placeholder="Votre recherche" type="text" onclick="vider(this);" onblur="verif(this)" style="width: 200px;height:25px;" />
	  </span>
	  
	  <input type="submit" value="lancer" style="width: 100px;height:30px;" onclick="submit()" />
	</form>
</div>
<script type="text/javascript">
	function vider(huhu){
		huhu.placeholder = '';
	}
	
	function verif(hub){
		if(hub.value=='') hub.placeholder="Votre recherche";
	}
    
    function submit(){
        if($('#editbox_search').val()=='') return false;
    }
</script>