<script type="text/javascript" src="<?=base_url()?>js/bootstrap-datepicker.min.js"></script>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

<!--<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>-->

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<div class="team-boxed">
<div class="container"> 
 <div class="row register-form">
    <div class="col-md-8 offset-md-2">
        <form class="custom-form">
            <h1>Register Form</h1>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="text" /></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="email" /></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password" /></div>
            </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Repeat Password </label></div>
                <div class="col-sm-6 input-column"><input class="form-control" type="password" /></div>
            </div>
            <div class="bootstrap-iso">
             <div class="container-fluid">
              <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12">

                <!-- Form code begins -->
                <form method="post">
                  <div class="form-group"> <!-- Date input -->
                    <label class="control-label" for="date">Date</label>
                    <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
                  </div>
                 </form>
                 <!-- Form code ends --> 

                </div>
              </div>    
             </div>
            <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="dropdown-input-field">Dropdown </label></div>
                <div class="col-sm-4 input-column">
                    <div class="dropdown"><button class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown </button>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </div>
                </div>
            </div>
            <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" /><label class="form-check-label" for="formCheck-1">I&#39;ve read and accept the terms and conditions</label></div><button class="btn btn-light submit-button" type="button">Submit Form</button></form>
    </div>
</div>
</div>
</div>
<?php

/* End of file page_header_home_recruitment.php */
/* Location: /community_auth/views/examples/page_header_home_recruitment.php */