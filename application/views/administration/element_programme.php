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
                <br />
                <p>
                    <style>
                        table select{
                            min-width:150px;
                        }
                    </style>
                    <?php echo form_open('administration/programme/ajout_element'); ?>
                    Date : <label><?php echo $prog[0]['daty']; ?></label><br /><br />
                    <style>
                        table th{
                            background:black;
                            color:white;
                            font-weight: bold;
                            min-width: 200px;
                        }
                        table{
                            border-collapse: collapse;
                        }
                    </style>
                    <table border="1">
                        <tr>
                            <th style="max-width: 15px;"></th>
                            <th>Titre</th>
                            <th>Type</th>
                            <th>Catégorie</th>
                        </tr>
                        <?php
                        if(isset($emissions) && count($emissions)>0):
                            foreach($emissions as $row) :?>
                        <tr>
                            <td><input type="radio" name="idemission" value="<?php echo $row['id']; ?>" /></td>
                            <td><?php echo $row['titre']; ?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['categorie']; ?></td>
                        </tr>
                        <?php
                            endforeach;
                        endif; ?>
                        <tr>
                            <td colspan="2"><input type="hidden" name="idprog" value="<?php echo $prog[0]['id']; ?>" /></td>
                        </tr>
                    </table>
                    <?php echo '<br>'.form_submit(array('name'=>'submit','value'=>'Valider','style'=>'width:100px; height:25px')).' '; ?>
    				<?php echo lien('administration/programme','<input type="button" value="Annuler" style="width:100px; height:25px" />'); ?>
    				<?php echo form_close(); ?>
                </p>
            </div>
            <?php $this->load->view('administration/template/footer.php'); ?>
        </div>
    </body>
</html>