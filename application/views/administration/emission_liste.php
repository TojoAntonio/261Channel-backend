<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php echo load_css_php('back_main_style','media="screen, projection"'); ?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/logo.png'; ?>" />
    <title>Administration 261Channel - <?php echo $title; ?></a></title>
</head>
<body id="home">
    <div class="wrap">
        <?php $this->load->view('administration/template/logo.php'); ?>
    </div>
    <?php $this->load->view('administration/template/menu.php'); ?>
    <div class="wrap" style="margin-top:5%;min-height: 300px;>
        <div id="left">
            <h2><?php echo $title; ?></h2>
            <br />
            <div id="upload">
            <?php echo lien('administration/emission/simple', '<input type="button" value="Emission simple" style="width:150px;height:25px;" />','title="Création d\'une émission simple" style="text-decoration:none"'); ?>
            <?php echo lien('administration/emission/composee', '<input type="button" value="Emission composée" style="width:150px;height:25px;" />','title="Création d\'une émission composée" style="text-decoration:none"'); ?>
            <?php echo lien('administration/emission/previsualisation', '<input type="button" value="Visualisations" style="width:150px;height:25px;" />','title="Visualisation d\'une émission" style="text-decoration:none"'); ?>
            <br /><br/>
            <style>
                .back th{
                    background:black;
                    color:white;
                    font-weight: bold;
                    min-width: 100px;
                }
                table{
                    border-collapse: collapse;
                }
            </style>
                <form action="<?php echo site_url('administration/emission/suppression'); ?>" method="POST">
                <?php
                    echo '<table border="1" class="back"><tr>';
                    echo '<th style="max-width:15px"></th>';
                    echo '<th style="max-width:200px">Nom émission</th>';
                    echo '<th>Durée</th></tr>';
                    if(isset($emissions) && count($emissions)>0){
                        foreach($emissions as $row){
                            echo '<tr><td><input type="checkbox" name="chkbx[]" value="'.$row->IDEMISSION.'" /></td>';
                            echo '<td>'.$row->E_NOM.'</td>';
                            echo '<td>'.$row->E_DUREE.'</td></tr>';
                        }
                    }
                    else echo '<tr><td colspan="3">Il n\'y aucune émission à afficher</td></tr>';
                    echo '</table>';
                ?>
                <br />
                <input type="submit" value="Supprimer" name="suppr" style="width:150px;height:25px;" />
                </form>
            </div>
        </div>
        <?php $this->load->view('administration/template/footer.php'); ?>
    </div>
</body>
</html>