
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost","root","","travelerapp");

// Check connection
 if($con === false){
     die("ERROR: Could not connect." . mysqli_connect_error());
}
// require('crud.php');
// $access=new Crud();

// $ret =new Retrive();
// $ret->retriving($access->dbconnect('localhost','travelerapp','root',""));

// Print host information
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($con);

?>
