<?php require_once(__DIR__ . "/config.php"); ?>


<?php

$error_count = 0;

$query = "SELECT * FROM users WHERE  email='" . $_POST["email"] . "'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
	$retdata["email"] = "error";
	$error_count++;
}

if ($_POST["password"] != $_POST["password_repeat"]) {
	$retdata["password"] = "error";
	$error_count++;
}

if ($error_count == 0) {
	$query = "INSERT INTO users ( email, password)
          VALUES ( '" . $_POST['email'] . "', md5('" . $_POST['password'] . "'));";
	$result = mysqli_query($con, $query);

	header('Location: ' . BASEURL . '/sign_up.php');
	exit;
} else {
	header('Location: ' . BASEURL . '/contact_us.php?' . http_build_query($retdata));
	exit;
}
?>