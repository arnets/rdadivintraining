<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
include "dataHandlerTest.php";
$ctrl = new dataHandler();
$src = "this";
$dest = "that";
$data=["bookings" => "",
"id" => "2",
"source" => $src,
"destination" => $dest,
"depart_date" =>"2019-06-09",
"return_date" =>"2019-07-06"];
$ctrl->delete($data);
