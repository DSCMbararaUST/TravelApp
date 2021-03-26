
<?php

    //components for the header
include('crud.php');
$access=new Crud();

$ret =new Retrive();
$ret->retriving($access->dbconnect('localhost','travelapp','root',""));

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


     <div class="card-body">
          <table class="table bordered">
                                <tr>
                                   <th>method</th>
                                   <th>category</th>
                                   <th>phone number</th>
                                   <th>amount</th>
                                </tr>
                                <?php foreach($ret->retriving($access->dbconnect('localhost','travelerapp','root',""),$pdo) as $dat):?>
                                <tr>

                                    <td><?=$dat->method?></td>
                                    <td><?=$dat->category?></td>
                                    <td><?=$dat->phonenumber?></td>
                                     <td><?=$dat->amount?></td>
                                    <td> 
                                        <a href="update.php?>" class="btn btn-primary"> Edit</a>
                                        <a href="deleting.php?>" class="btn btn-danger" name="delete"> Delete</a>
                                    </td>
                                    <?php  
                                  endforeach;
                                    ?>
                                </tr>
                                
                              </table>


                              
                          </div>
                  </body>
                  </html>