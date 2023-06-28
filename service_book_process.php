<?php require_once(__DIR__ . "/config.php"); 
$query = "INSERT INTO bookings ( user_id, package_id)
      VALUES ( '" . $_SESSION['id'] . "', '" . $_POST['package_id'] . "');";

$result = mysqli_query($con, $query);
header('Location: ' . BASEURL . '/services.php');