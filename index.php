<?php
$pagename = 'TravelerApp';

require_once('includes/config.php');
error_reporting(0);

if(isset($_POST['login']))
  {
     if(empty($_POST['email'])||empty($_POST['password']))
    {
      header("location:index.php?Empty=Please fill in the blanks");
    }

    else{
      $query="SELECT * FROM customer WHERE email='".$_POST['email']."'and password='".$_POST['password']."'";
      $result=mysqli_query($con,$query);

      if(mysqli_fetch_assoc($result))
        {
          $_SESSION['user']=$_POST['email'];
          header("location:starter.php");
        }

        else{
          header("location:index.php?Invalid=Pliz enter correct email and password");
        }
    }
    
   
  }


//     // Getting username/ email and password
//     $email=$_POST['email'];
//     $Phone_number=$_POST['phone'];
//     $password=$_POST['password'];
//     // Fetch data from database on the basis of username/email and password
// $sql =mysqli_query($con,"SELECT email,phone,password FROM customer WHERE (phone='$Phone_number' OR email='$email') AND password='$password'");

//  $num=mysqli_fetch_array($sql);

// if ($num>0) {
// $_SESSION['login']=$_POST['username'];
//     echo "<script type='text/javascript'> document.location = 'starter.php'; </script>";
//   }
//    else {
// echo "<script>alert('Wrong Password');</script>";

//   }

//if username or email not found in database
// else{
// echo "<script>alert('Please Kindly Check your Password Or Username');</script>";
//   }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="#">
    <title><?php echo $pagename; ?></title>
    <link rel="stylesheet" href="assests/css/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assests/css/style.css" type="text/css">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Traveler_App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="landing.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register here</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    </header>
    <article class="container">
      <h1 class="text-center">Login</h1>
 
        <form class="form-login container-fluid col-xl-6 col-md-6 col-sm-8" name="form-register" id="form-register" action="" method="post" enctype="multipart/form-data">

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
                <label for="phone" class="text_secondary">Phone_number</label>
                <input type="number" name="phone" autocomplete="on" class="form-control" id="nin" placeholder="Enter Your Phone_number" >

              </div>


              <div class="col-12 form-group mb-3 nin">
                  <label for="u_password" class="text_secondary">Password</label>
                  <input autocomplete="off" type="password" class="form-control u_password" id="u_password" name="password" placeholder="Enter Password" minlength="5" required>
              </div>
        
              <div class="col-12 form-group mb-3 center">
                  <button type="submit" class="btn btn-secondary btn-outline" id="login" name="login">Login</button>
              </div>
              <div class="col-12 form-group center">
                <p><a href="register.php">Click Here</a> To Register</p>
                <p><a href="starter.html">login temporarily</a></p>
              </div>
                  </div>
        </form>
    </article>
  </body>
</html>
