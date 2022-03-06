<!DOCTYPE html>
<html lang="en">
    <head>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Worker Login</title>
        <link rel="icon" href="<?php  echo base_url();?>dist/images/favicon.ico" />

        <!--Plugin CSS-->
        <link href="<?php  echo base_url();?>dist/css/plugins.min.css" rel="stylesheet">

        <!--main Css-->
<link href="<?php  echo base_url();?>dist/css/main.min.css" rel="stylesheet">

 


    </head>
    <body class="loginback bg-overlay">

        <!-- main-content-->
        <div class="wrapper" >
            <div class="w-100">
                <div class="row d-flex justify-content-center  pt-5 pb-5 mt-5">
                    <div class="col-12 col-xl-4">
                        <div class="card" style="border-radius: 4px;">
<!--                           <div class="card-body text-center">
                                
                            </div>-->
                            <h4 class="mb-0 redial-font-weight-400 ribbon">Please Sign In</h4>
                            <div class="redial-divider"></div>
                            <div class="card-body py-4 text-center">
                                <h4>Job Worker Login</h4>
<!--                                <img src="dist/images/logo-v2.png" alt="" class="img-fluid mb-4">-->
                                <form action="<?php  echo base_url();?>Jobworker/signin" method="post" id="Adminlogin">
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="E-Mail"  id="email" name="email" value="">
                                       
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="password"  id="password"
                                       name="password" value="">
                                      
                                    </div>
                                    <div class="form-group text-left">
                                        <input type="checkbox" id="checkbox11">
                                        <label for="checkbox11">Forgot password</label>
                                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Login</button>
                                </form>
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



<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>


<script src="<?php echo base_url();?>assets/erpjs/add_login.js"></script>

       
 
        
    </body>
</html>