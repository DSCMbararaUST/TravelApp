
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: #C05640;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="img/t.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Travel_App</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
       <div class="card-primary text-center">
          <strong >WELCOME</strong>

         
        </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
      
          <?php print_r($_SESSION['user']); ?>
        
          
          </a>
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
                <a href="cpass.php" class="nav-link">
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
            <a href="maps.php" class="nav-link active" >
              <i class="nav-icon fas fa-th"></i>
              <p>
                Google Maps
                <span class="right badge badge-danger">map</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
        
                <a class="btn btn-block btn-info mt-5" href="logout.php?logout"><font style="geogia" color="red">Logout</font></a>
                
              
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>