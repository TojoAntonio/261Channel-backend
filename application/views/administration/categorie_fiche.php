<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <?php echo load_css_php('back_main_style','media="screen, projection"'); ?>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/logo.png'; ?>" />
        <title>261Channel Administration - <?php echo $title; ?></title>
    </head>
    <body id="home">
        <div class="wrap">
            <?php $this->load->view('administration/template/logo.php'); ?>
        </div>
        <?php $this->load->view('administration/template/menu.php'); ?>
        <div class="wrap" style="margin-top:5%;min-height: 300px;">
            <div id="left">
                <h2><?php echo $title; ?></h2>
                <div style="clear:both"></div>
                <p>
				<?php echo form_open('administration/categorie/fiche'); ?>
				<?php echo '<br>Libellé <br/>'.form_input(array('name'=>'libelle','style'=>'width:200px;height:25px','value'=>set_value('libelle'))).form_error('libelle','<b style="color:red">','</b>').'<br>'; ?>
				<?php echo '<br>'.form_submit(array('name'=>'submit','value'=>'Valider','style'=>'width:100px; height:25px')).' '; ?>
				<?php echo lien('administration/categorie','<input type="button" value="Annuler" style="width:100px; height:25px" />'); ?>
				<?php echo form_close(); ?>
                </p>
            </div>
            <?php $this->load->view('administration/template/footer.php'); ?>
        </div>
    </body>
</html>