<?php require_once(__DIR__ . "/config.php"); ?>
<?php

if (isset($_GET["logout"]) && $_GET["logout"] == "yes") {
    session_destroy();
}
header('Location:' . BASEURL);
exit;

?>
