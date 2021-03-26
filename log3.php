<?php
session_start();
$pagename = 'TravelerApp';

require_once('includes/config.php');
error_reporting(0);

if(isset($_POST['login']))
  {
     if(empty($_POST['email'])||empty($_POST['password']))
    {
      header("location:log3.php?Empty=Please fill in the blanks");
    }

    else{
      $query="SELECT * FROM customer WHERE email='".$_POST['email']."'and password='".$_POST['password']."'";
      $result=mysqli_query($con,$query);
       // $_SESSION['result']=mysqli_query($con,$query);
     
      
        
      if(mysqli_fetch_assoc($result))
        {
           $_SESSION['user']=$_POST['email'];
           // $_SESSION['result'];
           
         
          header("location:starter.php");
        }

        else{
          header("location:log3.php?Invalid=Please enter correct email and password");
        }
    }
    
   
  }

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="scroll.css">
    <title>Hello, world!</title>
  </head>
  <body>
   

<div class="container-fluid">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TravellerApp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="log3.php">Sign-in</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link " href="reg3.php">Join-us</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

    <div class="row">
        <div class="col-md-8">
          <div class="card" style="background: #c05640;">
            <img src="img/travel.svg" width="80%">
          </div>

           <div class="card card-transparent">
    <div class="card-body">
    <h5 class="card-title">Travel Bookings have been made easy...</h5>
    <p class="card-text">Hey there, please book for your journey from anywhere at any time..</p>
  </div>
</div>
        </div>
        <div class="col-md-4" style="height: calc(100vh - 56px); overflow-y: scroll; ">
          <div class="card">
  
  <div class="card-body">
    <h5 class="card-title" align="center">Log in</h5>
    <p class="card-text" align="center">
      <form class="form-login col-xl-12 col-md-12 col-sm-8" name="form-register" id="form-register" action="" method="post" enctype="multipart/form-data">

          <div class="row">
                <?php
        if(@$_GET['Empty']==true){
          
          ?> 
          <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty']?> </div>
            
          <?php }?>
          
                  <?php
        if(@$_GET['Invalid']==true){
          
        ?> 
          <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid']?></div>
            
          
       <?php }?>

            
              <div class="col-12 form-group mb-3 nin">
                <label for="email" class="text_secondary">Email</label>
                <input type="email" name="email" autocomplete="on" class="form-control" id="nin" placeholder="Enter Your Email">
              </div>
              
              <div class="col-12 form-group mb-3 nin">
                  <label for="u_password" class="text_secondary">Password</label>
                  <input autocomplete="off" type="password" class="form-control u_password" id="u_password" name="password" placeholder="Enter Password" minlength="5" required>
              </div>
        
              <div class="col-12 form-group mb-3 center">
                  <button type="submit" class="btn btn-primary btn-outline" id="login" name="login">Login</button>
              </div>
              <div class="col-12 form-group center">
                <p>Don't have account! <a href="reg3.php">Register</a></p>
              </div>
                  </div>
        </form>
    </p>
  </div>
</div>
<div class="card" style="background: #0085c3;">
  
  <div class="card-body ">
    <h5 class="card-title" align="center">Travel with us please</h5>
    <p>For any advise,</p>
    <p>for more information</p>
    <p>contact us on:</p>
    <p>0789-898998</p>
  </div>
</div>
<div class="card">
  
  <div class="card-body">
    <h5 class="card-title" align="center">Global Buses</h5>
      <img src="img/trav.jpg" class="card-img-top" alt="...">
  </div>
</div>
<div class="card" >
  
  <div class="card-body">
    <h5 class="card-title" align="center">Jaguar Buses</h5>
    <img src="img/jag.jpg" class="card-img-top" alt="...">
  </div>
</div>
<div class="card" >
  <div class="card-body">
    <h5 class="card-title" align="center">YY Coaches</h5>
    <img src="img/yyy.jpg" class="card-img-top" alt="...">
  </div>
  </div>
</div>
        </div>
    </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>