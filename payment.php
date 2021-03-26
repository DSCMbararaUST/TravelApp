

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
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="starter.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  User
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img/t.png" alt="Travel Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Travel_App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change username</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cancel booking</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Payment Methods</h1>
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
            <div class="card card-primary card-outline">
              <div class="card-body">
                <!-- <h1 class="card-title" align="center"><strong>Buses Available</strong></h1> -->
                <div class="container-fluid">

                  <div class="input-group mb-3">
                      <select class="form-control">
                        <option selected>Choose payment mode</option>
                        <option value="Mobile Money">Mobile Money</option>
                        <option value="Via Bank">Via Bank</option>
                        <option value="Crypto currency">Crypto currency</option>
                      </select>
                    </div>

                    <div class="input-group col-12 mb-3">
                      <select class="form-control" >
                        <option selected>For</option>
                        <option value="Self">Self</option>
                        <option value="Other">Other</option>
                        <option value="Group">Group</option>
                      </select>
                    </div>



                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Enter Phone Number" aria-label="Enter Phone Number" >
                    </div>

                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Enter Amount" aria-label="Enter Amount" >
                    </div>

                      <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="button">Confirm</button>
                        <button class="btn btn-danger" type="button">Cancel</button>
                      </div>

                    <!-- <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    <button type="button" class="btn btn-secondary btn-sm">Small button</button> -->
               <!--  <p class="card-text">
                <strong>Pay via mobile money</strong>
                </p> -->
               <!--  <div class="card">
              <div class="card-body">
                This is some text within a card body.
              </div>
            </div>
               </div>
 -->
<!--                 <div class="container-fluid">
                  <div class="row">
                <a href="#" class="card-link"><button name="global" class="btn btn-success">Continue</button></a>
                <a href="busdetail.php" class="card-link"><button name="global" class="btn btn-danger">Cancel</button></a>

               </div>
               </div> -->
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
         <!--  <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
               <!--  <h1 class="card-title" align="center"><strong>Global Music</strong></h1>
 -->          <!--  <div class="container-fluid">
                <p class="card-text">
                <strong>Pay using Bank</strong>
                </p>
                <div class="card">
              <div class="card-body">
                This is some text within a card body.
              </div>
            </div>
               </div>

                <div class="container-fluid">
                  <div class="row">
                <a href="#" class="card-link"><button name="global" class="btn btn-success">Continue</button></a>
                <a href="busdetail.php" class="card-link"><button name="global" class="btn btn-danger">Cancel</button></a>

               </div>
               </div>
              </div>>
               
              </div>
            </div>

            
          </div> -->
         -->
          <!-- /.col-md-6 -->
       <!--  </div> -->
     <!--    <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="card card-primary card-outline">
              <div class="card-body">
               <h1 class="card-title" align="center"><strong>Global Chat</strong></h1>
 -->
               <!--  <p class="card-text">
                <strong>Bus 011</strong>
                </p>
                <p class="card-text">
                <strong>Departure time: 9:00am</strong>
                </p>
                <p class="card-text">
                <strong>No. of passengers:49</strong>
                </p>
                <p class="card-text">
                <strong>Description: Mbarara to Fortpotal</strong>
                </p>

                <a href="#" class="card-link"><button name="global" class="btn btn-success">Book</button></a>
               
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="card card-primary card-outline">
              <div class="card-body"> --><!-- 
     <h1 class="card-title" align="center"><strong>Passenger feedback</strong></h1>

                 <p class="card-text">
                <strong>Bus 004</strong>
                </p>
                <p class="card-text">
                <strong>Departure time: 4:00am</strong>
                </p>
                <p class="card-text">
                <strong>No. of passengers:4</strong>
                </p>
                <p class="card-text">
                <strong>Description: Mbarara to Gulu</strong>
                </p>

                <a href="#" class="card-link"><button name="global" class="btn btn-success">Book</button></a>
               
              </div>
            </div>
          </div>
          
        </div> -->



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
