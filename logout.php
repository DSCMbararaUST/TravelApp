<?php
session_start();

if(isset($_GET['logout'])){
	session_destroy();
	header("location:log3.php");
}

else{
	header("location:log3.php");
}

?>