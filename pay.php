<?php
session_start();
require_once('includes/config.php');
include('includes/sidebar.php');
include('includes/header.php');
include('hack_thone/phpqrcode/qrlib.php');
//require_once('includes/config.php');
//error_reporting(0);

if (isset($_POST['confirm'])) {

        $cat = $_POST['category'];
        $phone = $_POST['phone'];
        $pay = $_POST['payment'];
        $amt= $_POST['amount'];
        $email = $_POST['email'];


        

        $request=[
   'tx_reg'=>time(),
   'amount'=>$amt,
   'currency'=>'UGX',
   'payment_options'=>'mobilemoney',
   'redirect_url'=>'http://localhost/traveler_app/afterpay.php',
   'customer'=>[

     'email'=>$email,
     'name' => 'brian'
                ],

     'meta' => [
      'price' => $amt
                ],

     'customizations' => [
     'time' => 'Paying for testing the product',
     'description' => 'sample']
        ];
        //sending the above code to the flutterwave endpoint

       $curl=curl_init();
       curl_setopt_array($curl,array(
       CURLOPT_URL=>"https://api.flutterwave.com/v3/payments",
       CURLOPT_RETURNTRANSFER=>true,
       CURLOPT_ENCODING=>'',
       CURLOPT_MAXREDIRS=>10,
       CURLOPT_TIMEOUT=>0,
       CURLOPT_FOLLOWLOCATION=>true,
       CURLOPT_HTTP_VERSION=> CURLOPT_HTTP_VERSION_1_1,
       CURLOPT_CUSTOMREQUEST => 'POST',
       CURLOPT_POSTFIELDS => json_encode($request),
       CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer FLWSECK_TEST-2dc248bba0bff1b5c4dbe037a3126677-X',
        'Content-Type:application/json'

       ),



       ));
       $response= curl_exec($curl);
       curl_close($curl);
        echo '<prev>';
           echo $response;
        echo '</prev>';

        /*

        // $newpwd = md5hash($pwd);
        $db = "INSERT INTO payment(method,category,phone,amount) VALUES ('$pay','$cat','$phone','$amt')";
        echo "hey";
        
        if (mysqli_query($con,$db)){

          echo  "information submited successfully";
        }
        else{
          echo "Failed to submit data!";
        }

*/

}


?>

<?php
require_once('includes/config.php');
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
             
             <form name="form1" method="post">
                  <div class="input-group  mb-3">
                      <select class="form-control" name="payment" required="">
                        <option selected>Choose payment mode</option>
                        <option value="Mobile Money">Mobile Money</option>
                        <option value="Via Bank">Via Bank</option>
                        <option value="Crypto currency">Crypto currency</option>
                      </select>
                    </div>

                    <div class="input-group mb-3">
                      <select class="form-control" name="category" required="">
                        <option selected>For</option>
                        <option value="Self">Self</option>
                        <option value="Other">Other</option>
                        <option value="Group">Group</option>
                      </select>
                    </div>



                    <div class="input-group mb-3">
                      <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" aria-label="Enter Phone Number" required="">
                    </div>

                    <div class="input-group mb-3">
                      <input type="email" class="form-control" name="email" placeholder="Enter your email" aria-label="Enter email">
                    </div>

                    <div class="input-group mb-3">
                      <input type="number" class="form-control" name="amount" placeholder="Enter Amount" aria-label="Enter Amount" required="" >
                    </div>

                      <div class="d-grid gap-2 col-6 mx-auto">
                      	  <button type="submit" class="btn btn-primary btn-outline" name="confirm">Confirm</button>
                      	 <a href="retrieving.php"> <button type="submit" class="btn btn-primary btn-outline" name="print">Print</button></a>
                       <!--  <button class="btn btn-success" type="submit" name="confirm">Confirm</button> -->
                        <button class="btn btn-danger" type="button">Cancel</button>
                      </div>
                  </form>

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
         



        <!-- /.row -->
      </div><!-- /.container-fluid -->
   <div class="col-xl-6 col-md-6 col-sm-6">
                                         <?php 

   $alldata=  "briano";
$path = 'hack_thone/images/'; 
$file = $path.uniqid().".png"; 
  
$ecc = 'L'; 
$pixel_Size = 3; 
$frame_Size = 3; 

QRcode::png($alldata, $file, $ecc, $pixel_Size); 

echo "<center><img src='".$file."'></center>"; 
?> 

   </div>

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
    <strong>Copyright &copy; 2021 <a href="https://adminlte.io">Travel.io</a>.</strong> All rights reserved.
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
