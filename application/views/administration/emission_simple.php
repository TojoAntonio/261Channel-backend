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
    <div class="wrap" style="margin-top:5%;min-height: 300px;>
        <div id="left">
            <h2><?php echo $title; ?></h2>
            <div id="upload">
                <br/>
                <?php
                echo form_open_multipart('administration/emission/simple');
                echo '<br/>Titre<br/><input type="text" name="titre" style="width:200px;height:25px;" />';
                echo '<br/><br/>Durée<br/><input type="text" name="duree" style="width:100px;height:25px;" /> sec';
                echo '<br/><br/>Fichier vidéo<br/><input type="file" name="userfile" />';
                if(isset($categories)){
                    echo '<br/><br/>Catégorie<br/><select name="categ" style="width:150px;">';
                    foreach($categories as $row){
                        echo '<option value="'.$row->IDCATEGORIE.'">'.$row->CAT_LIBELLE.'</option>';
                    }
                    echo '</select>';
                }
                if(isset($types)){
                    echo '<br/><br/>Type<br/><select name="typ" style="width:150px;">';
                    foreach($types as $row){
                        echo '<option value="'.$row->IDTYPE.'">'.$row->T_LIBELLE.'</option>';
                    }
                    echo '</select>';
                }
                echo '<br/><br/><input type="submit" name="upload" value="Valider" style="width:100px;height:25px;" /> ';
                echo lien('administration/emission','<input type="button" value="Annuler" style="width:100px;height:25px" />','title="Emissions" style="text-decoration:none"');
                echo form_close();
                ?>
            </div>
        </div>
        <?php $this->load->view('administration/template/footer.php'); ?>
    </div>
</body>
</html>