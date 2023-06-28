<?php require_once(__DIR__ . "/config.php"); ?>
<?php

$query = "SELECT * FROM users WHERE email='" . $_POST["email"] . "' AND password=md5('" . $_POST["password"] . "') ";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $_SESSION["successlogin"] = "yes";
        $_SESSION["id"] = $row["id"];
        $_SESSION["email"] = $row["email"];
        $_SESSION["role"] = $row["user_role"];
    }

    header('Location:' . BASEURL);
    exit;
} else {
    $retdata["eml_pass"] = "error";
    header('Location: ' . BASEURL . '/sign_up.php?' . http_build_query($retdata));
    exit;
}

?>
