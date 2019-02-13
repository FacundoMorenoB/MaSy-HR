<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->helper('url'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css">
</head>

<body>
    <div class="login-clean" style="background-color: rgb(255,255,255);">
        <form method="post" style="background-color: rgb(255,255,255);">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-lock-combination" style="color: rgb(241,175,6);"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(241,175,6);">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
    </div>
    <script src="<?=base_url()?>js/jquery.min.js"></script>
    <script src="<?=base_url()?>/js/bootstrap.min.js"></script>
</body>

</html>