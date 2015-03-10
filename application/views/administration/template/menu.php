<style>
	.monstyle{
		position:fixed;
		background-color:#9a9a9a;
		padding:10px;
		margin-top:-20px;
		margin-left:10px;
		min-height:400px;
		width:300px;
		float:left;
		border-radius:5px;
		border:1px solid gray;
		opacity:0.6;
	}
	
	.monstyle:hover{
		opacity:0.9;
	}
</style>
<div class="monstyle">
    <h3 style="color: white;"><u>Plan de cette section...</u></h3><br /><br />
    <?php echo lien('accueil', '<input type="button" value="Front-End (Visiteur)" style="width:300px;height:30px;" />','title="Retour au Front-Office du site" style="text-decoration:none"').'<br><br>'; ?>
	<?php echo lien('administration/accueil', '<input type="button" value="Accueil" style="width:300px;height:30px;" />','title="Page d\'accueil de l\'Administration" style="text-decoration:none"').'<br><br>'; ?>
	<?php echo lien('administration/emission', '<input type="button" value="Emissions" style="width:300px;height:30px;" />','title="Emissions" style="text-decoration:none"').'<br><br>'; ?>
    <?php echo lien('administration/categorie', '<input type="button" value="Catégories" style="width:300px;height:30px;" />','title="Catégories" style="text-decoration:none"').'<br><br>'; ?>
    <?php echo lien('administration/type', '<input type="button" value="Types" style="width:300px;height:30px;" />','title="Types" style="text-decoration:none"').'<br><br>'; ?>
    <?php echo lien('administration/programme', '<input type="button" value="Programmes" style="width:300px;height:30px;" />','title="Programmes" style="text-decoration:none"').'<br><br>'; ?>
</div>
