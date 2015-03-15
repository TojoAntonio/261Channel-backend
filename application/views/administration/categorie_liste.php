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
                    <form action="<?php echo site_url('administration/categorie/traitement'); ?>" method="POST">
                        <?php echo lien('administration/categorie/fiche', '<input type="button" value="Ajouter" style="width:100px;height:25px;" />','title="Fiche catégorie" style="text-decoration:none"'); ?>
                        <input name="bouton" type="submit" value="Modifier" style="width:100px;height:25px;" />
                        <input name="bouton" type="submit" value="Supprimer" style="width:100px;height:25px;" />
                    <br /><br />
                    <script language="JavaScript">
        				function selectAll(source) {
        					checkboxes = document.getElementsByName('chkbx[]');
        					for(var i in checkboxes)
        						checkboxes[i].checked = source.checked;
        				}
        			</script>
                    <style>
                        table{border-collapse:collapse;}
                        th{background:black;color:white;font-weight:bold;}
                    </style>
                    <table border="1">
                        <tr>
                            <th><input type="checkbox" onclick="selectAll(this);" /></th>
                            <th>Libellé</th>
                        </tr>
                        <?php
                            foreach($listecat as $row){
                                echo '<tr>';
                                echo '<td style="max-width:20px;"><input name="chkbx[]" type="checkbox" value="'.$row->IDCATEGORIE.'" /></td>';
                                echo '<td style="min-width:200px;">'.$row->CAT_LIBELLE.'</td>';
                                echo '</tr>';
                            }
                        ?>
                    </table>
                    </form>
                </p>
            </div>
            <?php $this->load->view('administration/template/footer.php'); ?>
        </div>
    </body>
</html>