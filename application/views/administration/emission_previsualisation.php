<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<?php echo load_css_php('back_main_style','media="screen, projection"'); ?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/logo.png'; ?>" />
    <title>261Channel Administration - <?php echo $title; ?></title>
    <?php echo load_js('jquery-2.1.3'); ?>
</head>
<body id="home">
    <div class="wrap">
        <?php $this->load->view('administration/template/logo.php'); ?>
    </div>
    <?php $this->load->view('administration/template/menu.php'); ?>
    <div class="wrap" style="margin-top:5%;min-height: 500px;">
        <div id="left">
            <h2><?php echo $title; ?></h2>
            <div>
                <br />
                <?php echo $code; ?>
				<br/>     
            </div>
        </div>
        <?php $this->load->view('administration/template/footer.php'); ?>
    </div>
</body>
</html>