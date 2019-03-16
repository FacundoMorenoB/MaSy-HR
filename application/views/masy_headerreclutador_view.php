<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
    <title>MaSy-HR</title>
    <link rel="stylesheet"href="<?=base_url()?>css/bootstrap.min.css"/>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Lato:300,400,700"/>
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Cookie"/>
    <link rel="stylesheet"href="<?=base_url()?>css/gradient-navbar.css"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css"/>
    <link rel="stylesheet"href="<?=base_url()?>css/Pretty-Footer.css"/>
    <link rel="stylesheet"href="<?=base_url()?>fonts/font-awesome.min.css">
    <link rel="stylesheet"href="<?=base_url()?>fonts/ionicons.min.css">
    <link rel="stylesheet"href="<?=base_url()?>css/best-carousel-slide.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap-datetimepicker.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md"id="app-navbar">
        <div class="container-fluid"><a class="navbar-brand"href="<?php echo site_url('masy_login_controller/index'); ?>"><img src="<?=base_url()?>/img/masyhr_Logo.png"width="50"height="50"/></a><button data-toggle="collapse"data-target="#navcol-1"class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse"id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li role="presentation"class="nav-item"><a href="<?php echo site_url('masy_login_controller/personaldata'); ?>"class="nav-link">Informacion personal</a></li>
                    <li role="presentation"class="nav-item"><a href="<?php echo site_url('masy_login_controller/recruiter'); ?>"class="nav-link">Reclutamiento y Selecci&oacute;n</a></li>
                    <li role="presentation"class="nav-item active">
                    	<div class="btn btn-light action-button">
						<?php
							echo isset( $auth_user_id )
								? logout_anchor('masy_login_controller/logout', 'Salir')
								: login_anchor('masy_login_controller', 'Login', 'id="login-link"' );
						?>
						</div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
   
<?php

/* End of file page_header_home_recruitment.php */
/* Location: /community_auth/views/welcome/page_header_home_recruitment.php */