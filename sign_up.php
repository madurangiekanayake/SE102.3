<?php
require_once(__DIR__ . "/config.php");
?>
<html>
<header>
    <title></title>

    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style1.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL ?>/assets/css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</header>

<body background="pic/d1.jpg">
    <div class="header">


        <div class="dropdown">
            <button class="dropbtn">Menu</button>
            <div class="dropdown-content">
                <ul>
                    <li><a href="<?php echo BASEURL ?>">Home</a></li>
                    <li><a href="<?php echo BASEURL ?>/about_us.php">About us</a></li>
                    <li><a href="<?php echo BASEURL ?>/services.php">Services</a></li>
                    <li><a href="<?php echo BASEURL ?>/contact_us.php">Contact Us</a></li>
                    <li><a href="<?php echo BASEURL ?>/sign_up.php">Sign up</a></li>
                    <li class="selected"><a href="<?php echo BASEURL ?>/gallery.php">Gallery</a></li>
                </ul>

            </div>
        </div>
        <div class="container">
            <h1>Contact Us</h1>
            <form action="<?php echo BASEURL ?>/sign_up_process.php" method="POST">
                <div class="form container">
                    <h1>sign up here!</h1>

                    <p>sign in </p>
                    <hr>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>


                    <hr>
                    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                    <button type="submit" class="registerbtn">sign in</button>
                </div>

                <div class="container signin">
                    <p>Don't have an account?
                    <nav>
                        <ul>
                            <li><a href="Contact Us.html">register here</a></li>.</p>
                </div>
            </form>
        </div>

        <h2>Contact Info</h2>
        <p>Mobile-0769001292<br>
            Address-54/4, Kandy,Srilanka<br>
            Email-wetours@gmail.com
        </p>
    </div>
    <div class="footer">
        <p>
            <center>/Home/About/Contact Us/Packages/<br>
            </center>
        </p>
    </div>

</body>

</html>