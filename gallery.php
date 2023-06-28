<?php

require_once(__DIR__ . "/parts/header.php");
?>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css">

<div align="center">
    <p>
        <img src="<?php echo BASEURL ?>/assets/pic/img4.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/img8.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/img9.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/a2.jpg" width="30%" height="25%">
    </p>




    <p>
        <img src="<?php echo BASEURL ?>/assets/pic/i1.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/i2.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/i3.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/a3.jpg" width="30%" height="25%">
    </p>


    <p> <img src="<?php echo BASEURL ?>/assets/pic/i4.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/i5.jfif" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/i6.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/a1.jfif" width="30%" height="25%">



    </p>
    <p> <img src="<?php echo BASEURL ?>/assets/pic/img1.jfif" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/img2.jfif" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/img3.jfif" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/a4.jpg" width="30%" height="25%">



    </p>
    <p> <img src="<?php echo BASEURL ?>/assets/pic/i7.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/i8.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/i9.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/a5.jpg" width="30%" height="25%">



    </p>
    <p> <img src="<?php echo BASEURL ?>/assets/pic/a7.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/img12.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/img6.jpg" width="30%" height="25%">
        <img src="<?php echo BASEURL ?>/assets/pic/a6.jpg" width="30%" height="25%">



    </p>

</div>
<script>
    var elements = document.getElementsByClassName("column");


    var i;


    function one() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.flex = "100%";
        }
    }

    // Two images side by side
    function two() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.flex = "50%";
        }
    }

    // Four images side by side
    function four() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.flex = "25%";
        }
    }
</script>



<?php require_once(__DIR__ . "/parts/footer.php"); ?>