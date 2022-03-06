<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lakshay  ERP system</title>
        <link rel="icon" href="<?php  echo base_url();?>dist/images/favicon.ico" />

        <!--Plugin CSS-->
        <link href="<?php  echo base_url();?>dist/css/plugins.min.css" rel="stylesheet">

        <!--main Css-->
<link href="<?php  echo base_url();?>dist/css/main.min.css" rel="stylesheet">

 <style>
     .error{
        color: red;
        text-align: left;
     }
 </style>


    </head>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            $success=$this->session->userdata('success');
            if ($success != "") {   
            ?>
            <div class="alert alert-success"><?php  echo $success;?></div>
            <?php
             }
            ?>
            <?php
            $failure=$this->session->userdata('failure');
            if ($failure != "") {   
            ?>
            <div class="alert alert-success"><?php echo $failure; ?></div>
            <?php
             }
            ?>
        </div>
    </div> 
    <body class="loginback bg-overlay">

        <!-- main-content-->
        <div class="wrapper" >
            <div class="w-100">
                <div class="row d-flex justify-content-center  pt-5 pb-5 mt-5">
                    <div class="col-12 col-xl-4">
                        <div class="card" style="border-radius: 4px;">
<!--                           <div class="card-body text-center">
                                
                            </div>-->
                            <h4 class="mb-0 redial-font-weight-400 ribbon text-center">Lakshay ERP system</h4>
                            <div class="redial-divider"></div>
                            <div class="card-body py-4">
                                <h4 style="text-align:center;">Please Sign In</h4>
<!--                                <img src="dist/images/logo-v2.png" alt="" class="img-fluid mb-4">-->
                                <form action="<?php  echo base_url();?>login/signin" method="post" id="Adminlogin">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Email"  id="admin_email" name="admin_email" value="">
                                       
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password"  id="password"
                                       name="password" value="">
                                      
                                    </div>
                                    <div class="form-group">
                                          <a href="<?php  echo base_url().'Admin/forgotpass';?>">Forgot password</a>
                                    </div>

                                    <button type="submit" name="login" class="btn btn-primary btn-sm">Login</button>
                    <a class="btn btn-primary btn-sm" href="<?php  echo base_url().'Admin/signupmanagement';?>">Sign up</a>
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
        <!-- End main-content-->
        
        <!-- jQuery -->
        <script src="<?php  echo base_url();?>dist/js/plugins.min.js"></script>        
        <script src="<?php  echo base_url();?>dist/js/common.js"></script>
       <script src="<?php echo base_url();?>assets/erpjs/add_login.js"></script>


<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
 
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>


$( "#Adminlogin" ).validate({
  rules: {
    admin_email: {
      required: true,
      email: true
    }
  },
  messages:{
 admin_email:"Please enter email",
password:"Please enter password"
    }
});
</script>
       
 
        
    </body>
</html>