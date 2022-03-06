<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Change  Password </title>
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
                            <h1><strong></strong> Change  Password</h1>                            
                        </div>
                    </div>
                        <div class="col-sm-6 col-sm-offset-3 text">                         
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Change Password</h3>
                                        <p>Enter username or email address to get password:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                             <form role="form" action="<?php  echo base_url().'Admin/changepwd';?>" method="post" class="login-form">
                                        <div class="form-group">
                        <label class="sr-only" for="Old password">New password</label>
                                            <input type="password" name="password" placeholder="New password" class="form-username form-control" id="new_pas" value="" >
                                        </div> 
                                        <div class="form-group">
                    <label class="sr-only" for="New password">Confirm password</label>
                                            <input type="password" name="confirmpass" placeholder="Confirm password" class="form-username form-control" id="c_pwd"
                                             value="">
                                        </div>                                      
                                            <button type="submit" onclick="Validate();" class="btn col-sm-5">Submit</button>
                                            <br><br>
                                    <a class="btn btn-primary" href="<?php  echo base_url().'Admin/loginview';?>"> Back to Login</a>
                                           
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

    <script type="text/javascript">
    function Validate() {
        var new_pas = document.getElementById("password").value;
        var c_pwd = document.getElementById("confirmpass").value;
        if (new_pas != c_pwd) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>