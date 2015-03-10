<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <?php echo load_css_php('back_main_style','media="screen, projection"'); ?>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/logo.png'; ?>" />
        <title>DagoTV Administration - <?php echo $title; ?></title>
        <?php echo load_js('jquery-2.1.3'); ?>
        <script>
            $(function(){
                $("input[name=radiobtn]").change(function(){
                    var valera = $("input[name=radiobtn]:checked").val();
                    $.ajax({
                        url: '<?php echo site_url('administration/programme/emissions'); ?>'+'/'+valera,
        				type: 'GET',
        				dataType : 'html',
        				success:function(res){
                            $("#display").empty().hide();
                            $("#display").append(res);
                            $("#display").fadeIn(300);
                        }
                    });
                });
            });
        </script>
    </head>
    <body id="home">
        <div class="wrap">
            <?php $this->load->view('administration/template/logo.php'); ?>
        </div>
        <?php $this->load->view('administration/template/menu.php'); ?>
        <div class="wrap" style="margin-top:5%;min-height: 300px;>
            <div id="left">
                <h2><?php echo $title; ?></h2>
                <br /><?php echo lien('administration/programme/creation', '<input type="button" value="Création de programme" style="width:300px;height:30px;" />','title="Création de programme" style="text-decoration:none"').'<br/>'; ?>
                <br />
                <div>
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
                    <form action="<?php echo site_url('administration/programme/choix_programme'); ?>" method="POST" style="float: left;">
                        <table border="1">
                            <tr>
                                <th style="max-width: 15;"></th>
                                <th>Date du programme</th>
                            </tr>
                            <?php                        
                                if(isset($programmes) && count($programmes)>0){
                                    foreach($programmes as $row){
                                        echo '<tr><td><input type="radio" name="radiobtn" value="'.$row['id'].'" /></td>';
                                        echo '<td>'.$row['daty'].'</td></tr>';
                                    }
                                }
                                else echo '<tr><td colspan="2">Il n\'y a aucun programme enregistré pour le moment</td></tr>';
                            ?>
                        </table>
                        <br />
                        <input type="submit" name="submit" value="Ajouter émission" style="width:150px;height:25px;" />
                        <br /><br />
                        <input type="submit" name="lancer" value="Lancer le programme" style="width:150px;height:25px;" />
                    </form>
                    <div id="display" style="margin-left:240px;">
                    </div>
                </div>
            </div>
            <?php $this->load->view('administration/template/footer.php'); ?>
        </div>
    </body>
</html>