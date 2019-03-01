<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		body{background:#fee;}
		#menu{float:left;width:100%;background:pink;}
		@media only screen and ( min-width:801px ){
			#menu{float:right;width:25%;}
		}
	</style>
	<?php
		// Add any javascripts
		if( isset( $javascripts ) )
		{
			foreach( $javascripts as $js )
			{
				echo '<script src="' . $js . '"></script>' . "\n";
			}
		}

		if( isset( $final_head ) )
		{
			echo $final_head;
		}
	?>
    <title>MaSy-HR Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/forms.css"> 
    <link rel="stylesheet" href="<?=base_url()?>fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="<?=base_url()?>css/Header-Dark.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Team-Boxed.css">
</head>
<body>
    <script src="<?=base_url()?>js/jquery.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
	<div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container">
                    <?php
						$link_protocol = USE_SSL ? 'https' : NULL;
					?>
            	<a class="navbar-brand" href="<?php echo site_url('welcome/index', $link_protocol); ?>"><strong><img src="<?=base_url()?>/img/masyhr_Logo.png" class="img-circle" alt="Cinque Terre" width="60" height="60"></strong><br></a>
            	<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo site_url('welcome/employee', $link_protocol); ?>">Employee<br></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo site_url('welcome/personaldata', $link_protocol); ?>">Personal data</a></li>
                    </ul>
                    <span class="navbar-text actions">
                    	<div class="btn btn-light action-button">
                    	<?php
							echo isset( $auth_user_id )
								? logout_anchor('welcome/logout', 'Logout')
								: login_anchor('welcome', 'Login', 'id="login-link"' );
						?>
						</div>
					</span>

                </div>
    </div>
    </nav>
    </div>
<?php

/* End of file page_header_home_recruitment.php */
/* Location: /community_auth/views/welcome/page_header_home_recruitment.php */