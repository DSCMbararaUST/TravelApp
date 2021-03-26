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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="#">
    <title><?php echo $pagename; ?></title>
    <link rel="stylesheet" href="assests/css/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assests/css/style.css" type="text/css">
<script type="text/javascript">
  function check_pass(){
    if(document.getElementById('password').value==document.getElementById('cpassword').value){
      document.getElementById('submit').disabled=false;
    }
    else{
      document.getElementById('submit').disabled=true;
    }
  }

</script>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Traveler_App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="landing.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="register.php">Register here</a>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <article class="container">
      <h1 class="text-center">Register here</h1>

        <form class="form-register container-fluid col-6" name="form-register" id="form-register" action="" method="post" enctype="multipart/form-data">
          
          <div class="row">
              <div class="col-12 form-group mb-3 nin">
                  <label for="username" class="text_secondary">FullName:</label>
                  <input autocomplete="off" type="text" class="form-control u_username" id="u_username"
                   name="username" placeholder="Enter Full Name" required>

              </div>
              
               <div class="col-12 form-group mb-3 nin">
                <label for="email" class="text_secondary">Email</label>
                <input type="email" name="email" autocomplete="on" class="form-control" id="nin" placeholder="Enter Your Email">

              </div>
              <div class="col-12 form-group mb-3 nin">
                <label for="phone" class="text_secondary">Phone</label>
                <input type="number" name="phone" autocomplete="on" class="form-control" id="nin" placeholder="Enter Your Phone" required>

              </div>
             
              <div class="col-12 form-group mb-3 nin">
                <label for="nin" class="text_secondary">Gender</label>
                <select class="form-control" name="gender" required>
                  <option value="">Select Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
              </div>
              <!-- <input type="hidden" name="" value="Innocent"> -->
              <div class="col-12 form-group mb-3 nin">
                  <label for="u_password" class="text_secondary">Password</label>
                  <input autocomplete="off" type="password" class="form-control u_password" id="password" 
                  name="password" placeholder="Enter Password" minlength="5" required onchange="check_pass();">
              </div>
               <div class="col-12 form-group mb-3 nin">
                  <label for="u_password" class="text_secondary">Confirm password</label>
                  <input autocomplete="off" type="password" class="form-control u_password" id="cpassword" 
                  name="cpassword" placeholder="Confirm Password" minlength="5" required onchange="check_pass();">
              </div>

              <div class="col-12 form-group mb-3 center">
                  <button type="submit" class="btn btn-secondary btn-outline" onclick="window.location:href='index.login'" id="submit" name="register">Register</button>
                  <p>Already have account <a href="index.php">login</a></p>
              </div>
                  </div>
        </form>
    </article>
  </body>
</html>
