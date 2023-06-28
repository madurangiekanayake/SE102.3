<?php

if (!isset($_SESSION)) { session_start(); }

define( "BASEURL" , "http://127.0.0.1/tour_mngmt_sys" );

$con = mysqli_connect("localhost","root","","tour_management");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



?>