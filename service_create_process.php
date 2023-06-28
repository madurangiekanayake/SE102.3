<?php require_once(__DIR__ . "/config.php"); 
$query = "INSERT INTO packages ( title, description)
      VALUES ( '" . $_POST['title'] . "', '" . $_POST['description'] . "');";

$result = mysqli_query($con, $query);
header('Location: ' . BASEURL . '/services.php');