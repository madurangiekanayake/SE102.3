<?php
require_once(__DIR__ . "/config.php");
?>
<html>
<header>
    <title>weTour - Register</title>

    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</header>

<body background="pic/des.jpg">
    <div class="header">


        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <ul>
                    <li><a href="<?php echo BASEURL ?>">Home</a></li>
                    <li><a href="<?php echo BASEURL ?>/about_us.php">About us</a></li>
                    <li><a href="<?php echo BASEURL ?>/services.php">Services</a></li>
                    <li class="selected"><a href="<?php echo BASEURL ?>/contact_us.php">Contact Us</a></li>
                    <li><a href="<?php echo BASEURL ?>/sign_up.php">Sign up</a></li>
                    <li><a href="<?php echo BASEURL ?>/gallery.php">Gallery</a></li>
                </ul>

            </div>
        </div>
        <div class="container">
            <h1>Contact Us</h1>
            <div class="form container">
                <h1>Register</h1>

                <p>Please fill in this form to create an account.</p>

                <form action="<?php echo BASEURL ?>/contact_us_process.php" method="post">
                    <hr>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required />

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required />

                    <label for="repeatpassword"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="password_repeat" required />

                    <hr><button type="submit" class="registerbtn" name="btn">Register</button>

                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a></p>


                </form>
            </div>

            <div class="container signin">
                <p>Already have an account?
                <nav>
                    <ul>
                        <li><a href="signup.html">sign up here</a></li>.</p>
            </div>

            <h2>Contact Info</h2>

            <p>Mobile-0769001292<br>
                Address-54/4,colombo,Srilanka<br>
                Email-wetours@gmail.com
            </p>
        </div>
        <div class="footer">
            <p>
                <center>/Home/About/Contact Us/Packages/<br>
                    Copyright@weTours</center>
            </p>
        </div>
        <div align="center">
            <div align="center">
                //map

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.580386660841!2d80.03836421477236!3d6.8207793950703675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1658600094930!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">"
                    width="400"
                    height="300"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0">
                </iframe>

</body>

</html>