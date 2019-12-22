<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Foods and Drugs Authority</title>
  <!--favicon-->
  <link rel="icon" href="<?php echo URLROOT.'/backoffice/'?>/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="<?php echo URLROOT.'/backoffice/'?>/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT.'/backoffice/'?>/plugins/jquery.steps/css/jquery.steps.css">
  <!-- simplebar CSS-->
  <link href="<?php echo URLROOT.'/backoffice/'?>plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="<?php echo URLROOT.'/backoffice/'?>/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
  <!--Touchspin-->
  <link href="<?php echo URLROOT.'/backoffice/'?>/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo URLROOT.'/backoffice/'?>/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo URLROOT.'/backoffice/'?>/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo URLROOT.'/backoffice/'?>/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?php echo URLROOT.'/backoffice/'?>/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?php echo URLROOT.'/backoffice/'?>/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="<?php echo URLROOT.'/backoffice/'?>/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">FDA Customer</h5>
     </a>
	 </div>
	 <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="<?php echo URLROOT.'/backoffice/pages/index' ?>" class="waves-effect">
          <i class="icon-home"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
       
      </li>

       <li>
        <a href="index.html" class="waves-effect">
          <i class="icon-user"></i> <span>Profile</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
       
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="icon-briefcase"></i>
          <span>Registrations</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
  		  <li><a href="<?php echo URLROOT.'/backoffice/pages/pickform' ?>">
          <i class="fa fa-circle-o"></i> New Registrations</a></li>
  		  <li><a href="ui-buttons.html"><i class="fa fa-circle-o"></i> Registration History</a></li>
        </ul>
      </li>
      <li>
        <a href="calendar.html" class="waves-effect">
          <i class="fa fa-shopping-cart"></i> <span>Invoices and Payments</span>
        </a>
      </li>

       <li>
        <a href="calendar.html" class="waves-effect">
          <i class="fa fa-bell-o"></i> <span>Notifications</span>
          <small class="badge float-right badge-info">New</small>
        </a>
      </li>
	 
    </ul>
	 
   </div>