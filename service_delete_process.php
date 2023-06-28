<?php require_once(__DIR__ . "/config.php"); 
$query = "DELETE FROM `packages` WHERE `packages`.`id` =  '" . $_POST['id'] . "';";

$result = mysqli_query($con, $query);
header('Location: ' . BASEURL . '/services.php');