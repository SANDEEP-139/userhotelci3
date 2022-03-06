<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Lakshy Garment ERP</title>
        <link rel="icon" href="<?php  echo base_url();?>dist/images/favicon.ico" />       
        <!--Plugin CSS-->
        <link href="<?php  echo base_url();?>dist/css/plugins.min.css" rel="stylesheet">
        <!--main Css-->
        <link href="<?php  echo base_url();?>dist/css/main.min.css" rel="stylesheet">
           <link rel="stylesheet" type="text/css" href="<?php  echo base_url();?>dist/css/animation.css" />
            <!--main validation js-->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
        <style type="text/css">
            .sidenav {
    height: 100%;
    width: 0;
    position: absolute;
    z-index: 1;
    top: 0px;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 10px;
   
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    font-size: 13px;
    background: rgba(0,0,0,0.2);
        text-align: left;
    padding: 2px 15px !important;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.sideverse
{
    margin: 0;
    padding: 0;
     -webkit-animation-duration: 2s;
    animation-duration: 2s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}
.sideverse li
{

    margin-bottom: 5px;
    margin-left: 10px;
    margin-right: 10px;
    background: #fff;
    position: relative;
}
.sideverse li a
{

        padding: 10px;
    display: block;
    color: #15236d;
    font-weight: 700;
    font-size: 13px;
}
.sideverse li a i
{

    color: #aeb2b7 !important;
    font-size: 15px;
    padding-right: 6px;
}
.sideverse li a span {
    display: inline-block;
}


.sideverse li a:hover, .sideverse li a:focus {
   
    color: #fff;
    display: block;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}




        </style>
    </head>
    <body>
        <!-- header-->
        <div id="header-fix" class="header py-4 py-lg-2 fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-3 col-xl-2 align-self-center">
                        <div class="site-logo">
                            <a href="index.html"><img src="<?php  echo base_url();?>dist/images/logo-v1.png" alt="" class="img-fluid" /></a>
                        </div>
                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn bg-transparent float-right">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 align-self-center d-none d-lg-inline-block">
                        <form>
                            <div class="form-group mb-0 redial-relative">
                                <input type="text" class="form-control redial-rounded-circle-50 border-0" placeholder="Search" />
                                <div class="btn-search">
                                    <a href="#" class="redial-light"><i class="lnr lnr-magnifier redial-absolute redial-right-20"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-7 d-none d-lg-inline-block">
                        <nav class="navbar navbar-expand-lg p-0">
                            <ul class="navbar-nav notification ml-auto d-inline-flex">
                                <li class="nav-item dropdown  align-self-center">
                                    <a  class="nav-link p-3" data-toggle="dropdown" aria-expanded="false"><span class="lnr lnr-envelope h4 text-white"></span>
                                        <span class="ring-point">2
                                            <span class="ring"></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu border-bottom-0 rounded-0 py-0">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media py-2">
                                                    <img src="<?php  echo base_url();?>dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid redial-rounded-circle-50" />
                                                    <div class="media-body">
                                                        <h6 class="mb-0">john send a message</h6>
                                                        <small class="redial-light">12 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media py-2">
                                                    <img src="<?php  echo base_url();?>dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid redial-rounded-circle-50" />
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Peter send a message</h6>
                                                        <small class="redial-light">15 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media py-2">
                                                    <img src="<?php  echo base_url();?>dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid redial-rounded-circle-50" />
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Bill send a message</h6>
                                                        <small class="redial-light">5 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item text-center py-2" href="#"> <strong>Read All Message <i class="fa fa-angle-right pl-2"></i></strong></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown  align-self-center">
                                    <a  class="nav-link p-3" data-toggle="dropdown" aria-expanded="false"><span class="lnr lnr-alarm h4 text-white"></span>
                                        <span class="ring-point">2
                                            <span class="ring"></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu border-bottom-0 rounded-0 py-0" id="style-1">
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media">
                                                        <h6 class="mb-0">Mark all as read</h6>
                                                </div>
                                            </a>    
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media py-2">
                                                    <div class="media-body">
                                                        <h6 class="mb-0">john - Application error.</h6>
                                                        <small class="redial-light"> 2 min ago </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media py-2">
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Peter - Application error.</h6>
                                                        <small class="redial-light">2 min aog </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media py-2">
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Bill- Application error.</h6>
                                                        <small class="redial-light"> 2 min ago </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media py-2">
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Peter - Server #12 overloaded.</h6>
                                                        <small class="redial-light"> 4 hours ago </small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <div class="media py-2">
                                                    <div class="media-body">
                                                        <h6 class="mb-0">Peter - Server #12 overloaded. </h6>
                                                        <small class="redial-light"> 3 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="divider no-mbot"></li>
                                        <li><a class="dropdown-item text-center py-3" href="notification.html"> <strong>See All Notification <i class="fa fa-angle-right pl-2"></i></strong></a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown user-profile align-self-center">
                                    <a  class="nav-link" data-toggle="dropdown" aria-expanded="false"> 
                                        <span class="float-right pl-3 text-white"><i class="fa fa-angle-down"></i></span>
                                        <div class="media">
                                            <img src="<?php  echo base_url();?>dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid redial-rounded-circle-50" width="45" />
                                            <div class="media-body align-self-center">
                                                <p class="mb-2 text-white text-uppercase font-weight-bold">John Deo</p>
                                                <small class="redial-primary-light font-weight-bold text-white"> Admin </small>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu border-bottom-0 rounded-0 py-0">
                                        <li><a class="dropdown-item py-2" href="<?php  echo base_url().'Jobworker/profile/';?>"><i class="fa fa-user pr-2"></i> User Profile</a></li>
                                        <li><a class="dropdown-item py-2" href="#"><i class="fa fa-cog pr-2"></i> Setting</a></li>
                                        <li><a class="dropdown-item py-2" href="<?php  echo base_url().'Jobworker/logout/';?>"><i class="fa fa-sign-out pr-2"></i> logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End header-->
 <!-- Main-content Top bar-->
        <div class="redial-relative mt-80">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-2 align-self-center my-3 my-lg-0">
                        <h6 class="text-uppercase redial-font-weight-700 redial-light mb-0 pl-2">Dashboard</h6>
                    </div>
                    <div class="col-12 col-md-4 align-self-center">
                        <div class="float-sm-left float-none mb-4 mb-sm-0">
                            <ol class="breadcrumb mb-0 bg-transparent redial-light">
                                <li class="breadcrumb-item"><a href="#" class="redial-light">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="clearfix d-none d-md-inline">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main-content Top bar-->

        <!-- main-content-->
        <div class="wrapper">
            <nav id="sidebar" class="card redial-border-light px-2 mb-4">
                <div class="sidebar-scrollarea">
                    <ul class="metismenu list-unstyled mb-0" id="menu">
                        <li><a href="<?php  echo base_url().'Jobworker/dashboard';?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                                
                        
                                               
                    </ul>
                        
                        
                       
                        
                        
                        
                       
                        
                       
                      
                        
                        
                        
                        

<div id="management" class="sidenav animated">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-close pr-1"></i> setup</a></a>
 <span class="sideverse">
                         <li><a href="javascript:void(0);"><i class="fa fa-dashboard pr-1"></i> Staff</a></li>
                         
                    </span>
</div>


                    </ul>
                </div>
            </nav>