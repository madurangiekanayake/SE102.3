<?php
require_once(__DIR__ . "/parts/header.php");
$query = "Select * from packages";
if (isset($_SESSION["successlogin"]) && $_SESSION["successlogin"] == "yes" && $_SESSION['role'] != 'admin') {
    $query = "Select *, bookings.id as book_id, packages.id as pid from packages left join bookings on bookings.package_id = packages.id and bookings.user_id = '" . $_SESSION['id'] . "'";
}
$result = mysqli_query($con, $query);
?>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css">
<?php if (isset($_SESSION["successlogin"]) && $_SESSION["successlogin"] == "yes" && $_SESSION['role'] == 'admin') { ?>
    <form action="<?php echo BASEURL ?>/service_create_process.php" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
    <hr>
<?php } ?>
<h1>Packages</h1>
<?php if (mysqli_num_rows($result) > 0) { ?>
    <?php while ($package = mysqli_fetch_assoc($result)) { ?>
        <h3><?php echo $package['title'] ?></h3>
        <?php if (isset($_SESSION["successlogin"]) && $_SESSION["successlogin"] == "yes" && $_SESSION['role'] != 'admin') { ?>
            <?php if (empty($package['book_id'])) { ?>
                <form action="<?php echo BASEURL ?>/service_book_process.php" method="post">
                    <input type="hidden" name="package_id" value="<?php echo $package['pid'] ?>">
                    <button type="submit" class="btn btn-primary">Book this Package</button>
                </form>
            <?php }else{ ?>
                <button type="submit" class="btn btn-success">You Booked this Package</button>
            <?php } ?>
        <?php } ?>
        <p><?php echo $package['description'] ?></p>

        <?php if (isset($_SESSION["successlogin"]) && $_SESSION["successlogin"] == "yes" && $_SESSION['role'] == 'admin') { ?>
            <form action="<?php echo BASEURL ?>/service_delete_process.php" method="post">
                <input type="hidden" name="id" value="<?php echo $package['id'] ?>">
                <button type="submit" class="btn btn-danger">Delete Package</button>
            </form>
        <?php } ?>
    <?php } ?>
<?php } ?>




<?php require_once(__DIR__ . "/parts/footer.php"); ?>