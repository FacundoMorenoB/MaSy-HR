<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->helper('url'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>employee</title>
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?=base_url()?>css/styles.css">
</head>

<body style="color: rgb(255,255,255);">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#"><strong>MaSy-HR</strong><br></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#"><strong>Employee</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Personal data</a></li>
                    </ul><span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="#">Log On</a></span></div>
    </div>
    </nav>
    </div>
    <div>
        <div class="container">
            <form><input class="form-control" type="text"><input class="form-control" type="text"><input class="form-control" type="tel"><input class="form-control" type="number"><input class="form-control" type="email">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Label</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Label</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Label</label></div><textarea class="form-control"></textarea>
                <div class="btn-toolbar">
                    <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Button 1</button><button class="btn btn-primary" type="button">Button 2</button></div>
                    <div class="btn-group" role="group"><button class="btn btn-primary" type="button">Button 1</button><button class="btn btn-primary" type="button">Button 2</button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="<?=base_url()?>js/jquery.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
</body>

</html>