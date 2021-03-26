<?php
$pagename = 'Traveler_App';
require_once('includes/config.php');
//require_once('includes/config.php');
//error_reporting(0);

if (isset($_POST['register'])) {

        $names = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sex = $_POST['gender'];
        $pwd = $_POST['password'];

        // $newpwd = md5hash($pwd);
        $db = "INSERT INTO customer (fullname,phone,email,password,gender) VALUES ('$names','$phone','$email','$pwd','$sex')";
        
        
        if (mysqli_query($con,$db)){

          echo  "Registered  successfully";
        }
        else{
          echo "Failed to submit data!";
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
          <a class="nav-link" href="log3.php">Sign-in</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="reg3.php">Join-us</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

    <div class="row">
        <div class="col-md-8">
          <img src="img/backpp.webp" width="100%">

           <div class="card card-transparent">
    <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-md-4" style="height: calc(100vh - 56px); overflow-y: scroll; ">
          <div class="card">
  
  <div class="card-body">
    <h5 class="card-title" align="center">Sign-up</h5>
    <p class="card-text" align="center">

     <form class="form-register col-xl-12 col-md-12 col-sm-8" name="form-register" id="form-register" action="" method="post" enctype="multipart/form-data">
          
          <div class="row">
              <div class="col-12 form-group mb-3 nin" align="center">
                 <!--  <label for="username" class="text_secondary">FullName:</label> -->
                  <input autocomplete="off" type="text" class="form-control u_username" id="u_username"
                   name="username" placeholder="Enter Full Name" required>

              </div>
              
               <div class="col-12 form-group mb-3 nin">
               <!--  <label for="email" class="text_secondary">Email</label> -->
                <input type="email" name="email" autocomplete="on" class="form-control" id="nin" placeholder="Enter Your Email">

              </div>
              <div class="col-12 form-group mb-3 nin">
               <!--  <label for="phone" class="text_secondary">Phone</label> -->
                <input type="number" name="phone" autocomplete="on" class="form-control" id="nin" placeholder="Enter Your Phone" required>

              </div>
             
              <div class="col-12 form-group mb-3 nin">
              <!--   <label for="nin" class="text_secondary">Gender</label> -->
                <select class="form-control" name="gender" required>
                  <option value="">Select Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>
              <!-- <input type="hidden" name="" value="Innocent"> -->
              <div class="col-12 form-group mb-3 nin">
                  <!-- <label for="u_password" class="text_secondary">Password</label> -->
                  <input autocomplete="off" type="password" class="form-control u_password" id="password" 
                  name="password" placeholder="Enter Password" minlength="5" required onchange="check_pass();">
              </div>
               <div class="col-12 form-group mb-3 nin">
                 <!--  <label for="u_password" class="text_secondary">Confirm password</label> -->
                  <input autocomplete="off" type="password" class="form-control u_password" id="cpassword" 
                  name="cpassword" placeholder="Confirm Password" minlength="5" required onchange="check_pass();">
              </div>

              <div class="col-12 form-group mb-3 center">
                  <button type="submit" class="btn btn-primary btn-outline" onclick="window.location:href='index.login'" id="submit" name="register">Sign-up</button>
                  <p>Already have account <a href="log3.php">login</a></p>
              </div>
                  </div>
        </form>    </p>
  </div>
</div>
<div class="card">
  
  <div class="card-body ">
    <h5 class="card-title" align="center">Travel with us please</h5>
    <img src="img/glob1.jpg" class="card-img-top">
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