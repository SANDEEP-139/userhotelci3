<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lakshay ERP system</title>
        <link rel="icon" href="dist/images/favicon.ico" />

        <!--Plugin CSS-->
        <link href="<?php  echo base_url();?>dist/css/plugins.min.css" rel="stylesheet">

        <!--main Css-->
        <link href="<?php  echo base_url();?>dist/css/main.min.css" rel="stylesheet">
    </head>
    <body class="loginback bg-overlay">

        <!-- main-content-->
        <div class="wrapper" >
            <div class="w-100">
                <div class="row d-flex justify-content-center  pt-4 pb-4 mt-5">
                    <div class="col-12 col-xl-4">
                        <div class="card" style="border-radius: 4px;">
<!--                           <div class="card-body text-center">
                                
                            </div>-->
                            <h4 class="mb-0 redial-font-weight-400 ribbon text-center">Lakshay ERP system</h4>
                            <div class="redial-divider"></div>
                            <div class="card-body py-4 text-center registercard">
                                <h4>Please Sign Up</h4>
<!--                                <img src="dist/images/logo-v2.png" alt="" class="img-fluid mb-4">-->
                                <form action="<?php  echo base_url();?>Admin/signupmanagement/create"method="post">
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name" name="name" style="height: 42px;" />
                                        </div>  
                                        <div class="row">
                                       
                                        <div class="col-sm-9 col-xs-8">
                                            <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Mobile" name="mobilenumber"  style="height: 42px;" />
                                        </div>
                                        </div>    
                                        </div> 
                                        <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Id" name="admin_email" style="height: 42px;" />
                                        </div> 
                                        <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" style="height: 42px;" />
                                        </div>
                                      
                                    
                                    <div class="form-group text-left">
                                        <input type="checkbox" id="checkbox11">
                                        <label for="checkbox11">Agree the terms and policy</label>
                                    </div>
<!--                                  <a href="#" class="btn btn-primary btn-md  btn-block">Login</a>-->
                             <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <p class="mb-0">Already have account ?  <a href="<?php  echo base_url().'Admin/loginview';?>"> Sign in</a></p>
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
    </body>
</html>