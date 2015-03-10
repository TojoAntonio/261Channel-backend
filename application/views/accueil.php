<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META TAGS -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="DAGOnline TV">
    <meta name="description" content="Site web Malgache de TV en ligne">
    <title>DagoTV Online | Malagasy vision</title>

    <!-- FRAMEWORK CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- STYLE SWITCHER CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/screen-cyan.css" type="text/css" media="screen">
    <link rel="alternate stylesheet" type="text/css" media="screen" title="lime-theme" href="<?php echo base_url().'assets/'; ?>css/screen-lime.css">
    <link rel="alternate stylesheet" type="text/css" media="screen" title="orange-theme" href="<?php echo base_url().'assets/'; ?>css/screen-orange.css">
    <!-- CSS FILES -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/print.css" type="text/css" media="print">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/reset.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/typography.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/forms.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/tab.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet">
    <link rel="stylesheet" media="screen" href="<?php echo base_url().'assets/'; ?>css/superfish.css" type="text/css">
    <!--[if lt IE 8]><link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>css/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <!-- LINK HOVER -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/'; ?>css/hover-effect.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?php echo base_url().'assets/'; ?>images/favicon.png" type="image/png">
    <link rel="icon" href="<?php echo base_url().'assets/'; ?>images/favicon.png" type="image/png">
    <!-- JAVASCRIPTS
    <script type="text/javascript" src="js/jquery.cookie.html"></script>
    -->
    <script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/jquery.prettyPhoto.js" charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/jquery.carouFredSel-6.2.0-packed.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/superfish.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/'; ?>js/functions.js"></script>
    <!--<script type="text/javascript" src="js/styleswitch.js"></script>-->
</head>
<body>
<!-- MAIN DIV CONTAINERS -->
<div class="span-container">
    <div class="span-29 container-blank">

        <div class="span-28">
            <?php $this->load->view('logo'); ?>
            <?php $this->load->view('menu'); ?>
        </div>
        <!-- MAINMENU -->

        <!-- END -->
    </div>
</div>
<div id="div-container"><!-- DIV CONTAINER -->

    <div id="main-container"><!-- MAIN CONTAINER -->
        <div id="content"><!-- CONTENT -->
            <div id="content-wrapper"><!-- CONTENT WRAPPER -->
                <div id="span-sidebar"><!-- SIDEBAR -->
                    <?php $this->load->view('recherche'); ?>
                    <?php $this->load->view('playlist'); ?>
                    <?php $this->load->view('social'); ?>
                </div>
                <!-- END SIDEBAR -->
                <div id="span-mainbox"><!-- SPAN MAINBOX -->
                    <?php $this->load->view('video'); ?>
                    <?php $this->load->view('programmeHorizontal'); ?>
                    <?php $this->load->view('populaire'); ?>
                </div><!-- SPAN MAINBOX -->
            </div><!-- CONTENT WRAPPER -->
        </div><!-- CONTENT -->
    </div><!-- MAIN CONTAINER -->
    <?php $this->load->view('footer'); ?>
</div><!-- DIV CONTAINER -->
</body>

<!-- Mirrored from theme.medioworks.com/tuber/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jan 2015 16:21:07 GMT -->
</html>
