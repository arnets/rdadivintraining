<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
if(isset($_GET['source']))
{
  $src = $_GET['source'];
  $dest = $_GET['destination'];
  $dep = $_GET['depart'];
  $ret = $_GET['return'];
  include'../mySqlConnection.php';
  include'../../models/connection.php';
  $sql2="INSERT INTO bookings(source,destination,depart_date,return_date) values('$src','$dest','$dep','$ret')";
  $con->exec($sql2);
  echo"travels booked";
  header("location:../../views/form-search.php");
}

function insertinfo(tablename, atttributes, conn)
{
arraylength= atttributes.length ;
if (arraylength==1)
  
}


 ?>
