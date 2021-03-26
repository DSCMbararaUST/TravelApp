<?php
session_start();
require_once('includes/config.php');
include('includes/sidebar.php');
include('includes/header.php');
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Travel_App</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<style type="text/css">
  .card-body{
     /*background: #FFB74D;*/
     background: cyan;


  }
</style>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">GLOBAL COACHES</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="starter.php">Home</a></li>
              <li class="breadcrumb-item active">Travel_App</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-primary card-outline h-100">
              <div class="card-body " style="">
                <h1 class="card-title" align="center"><strong>Buses Available</strong></h1>
                  <img src = "img/bus.jpg" width="60%">

                <p class="card-text">
                 Hey our dear Traveler, click the button to continue
                </p>

                <a href="book.php" class="card-link"><button name="global" class="btn btn-primary">view</button></a>
               
              </div>
            </div>
            
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-primary card-outline h-100">
              <div class="card-body">
                <h1 class="card-title" align="center"><strong>Global Music</strong></h1>
                 <img src = "img/music.svg" width="40%">
                <p class="card-text">
                 Hey our dear Traveler, click the button to continue
                </p>

                <a href="www.mwonyaa.com" class="card-link"><button name="global" class="btn btn-primary">continue</button></a>

               
              </div>
            </div>

            
          </div>
        
          <!-- /.col-md-6 -->
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h1 class="card-title" align="center"><strong>Global Chat</strong></h1>

                <p class="card-text">
                 Hey our dear Traveler, click the button to continue
                </p>

                <a href="#" class="card-link"><button name="global" class="btn btn-primary">Do it here</button></a>
               
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h1 class="card-title" align="center"><strong>Passenger feedback</strong></h1>

                <p class="card-text">
                 Hey our dear Traveler, click the button to continue
                </p>

                <a href="#" class="card-link"><button name="global" class="btn btn-primary">continue</button></a>
               
              </div>
            </div>
          </div>
          
        </div>



        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">Travel.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
