<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->helper('url'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>personalDta</title>
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#"><strong>MaSy-HR</strong><br></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Employee</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#"><strong>Personal data</strong></a></li>
                    </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#">Log On</a></span></div>
    </div>
    </nav>
    </div>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Change Password</strong></h2>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Change</button></div>
            </form>
        </div>
    </div>
    <div></div>
    <script src="<?=base_url()?>js/jquery.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
</body>

</html>