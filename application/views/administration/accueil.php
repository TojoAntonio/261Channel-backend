<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <?php echo load_css_php('back_main_style','media="screen, projection"'); ?>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/logo.png'; ?>" />
        <title>DagoTV Administration</title>
    </head>
    <body id="home">
        <div class="wrap">
            <?php $this->load->view('administration/template/logo.php'); ?>
        </div>
        <?php $this->load->view('administration/template/menu.php'); ?>
        <div class="wrap" style="margin-top:5%;min-height: 300px;>
            <div id="left">
                <h2>Bienvenue sur la page d'administration</h2>
                <br />
                <p>
                    Cette section est une partie du site vous permettant la maintenance.<br/>
                    Vous pourrez mettre à jour les différentes parties du site.
                </p>
            </div>
            <?php $this->load->view('administration/template/footer.php'); ?>
        </div>
    </body>
</html>