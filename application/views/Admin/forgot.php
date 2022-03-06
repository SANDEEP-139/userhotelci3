<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Forgot Password </title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="<?php  echo base_url();?>asset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php  echo base_url();?>asset/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php  echo base_url();?>asset/css/form-elements.css">
    <link rel="stylesheet" href="<?php  echo base_url();?>asset/css/style.css">
    </head>
    <body style="background-color: gray;">
        
        
        
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            
                            <h1><strong></strong> Forgot Password</h1>                            
                        </div>
                    </div>
                        <div class="col-sm-6 col-sm-offset-3 text">                         
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Forgot Password</h3>
                                        <p>Enter email address to get password:</p>
                                        <?php if($this->session->flashdata('success'))?>
                                        <h4 style="color: green;"> <?php echo $this->session->flashdata('success_msg'); ?></h4>

                                         <?php if($this->session->flashdata('fail'))?>
                                        <h4 style="color: red;"><?php echo $this->session->flashdata('fail_msg'); ?></h4>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="<?php echo base_url();?>forgetpassword/forgot_pass" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">User Email</label>
                                            <input type="email" required="" name="username_email" placeholder="Username or email" class="form-username form-control" id="form-username">
                                        </div>                                      
                                        <button type="submit" name="forgot_pass" class="btn col-sm-5" value="Submit">Submit</button>
                                            <br><br>
                                            
                                            <a class="btn btn-primary" href="<?php  echo base_url().'Admin/changepwd';?>" style="float:right;">Change password</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>        
    <script src="<?php  echo base_url();?>asset/js/jquery-1.11.1.min.js"></script>
    <script src="<?php  echo base_url();?>asset/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php  echo base_url();?>asset/js/jquery.backstretch.min.js"></script>
        <script src="<?php  echo base_url();?>asset/js/scripts.js"></script>        
    </body>
</html>