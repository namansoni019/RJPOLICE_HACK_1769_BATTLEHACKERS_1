<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_email'])) {
    ?>
<!DOCTYPE html>

<html>

<head>
    <title>Rajasthan Police</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">
    <div class="wrapper row0">
        <div id="topbar" class="clear">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <!-- <li><a href="">User Login</a></li> -->
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </nav>
        </div>
    </div>
    
    
    <div class="wrapper">
        <div id="slider">
            <div id="slide-wrapper" class="rounded clear">

                <figure id="slide-1" style="align-items: center; width: 100%;">
                    <a class="view" href="#" id="view" ><img src="rajasthan_police.jpg" style="align-items: center; width: 90vw;" alt="">
                        <div class="form" style="display: flex; justify-content: center;margin-top: 2rem;"> <a href="feedback.php"><button>GIVE FEEDBACK</button></a></div>
                    </a>

                </figure>

            </div>
        </div>
    </div>
    <div class="wrapper row4">
        <div class="rounded">
            <footer id="footer" class="clear">
                <div class="one_third">
                    Tonk Road, Lal Kothi <address>
                        Jaipur<br>
                        302015<br>
                        <i class="fa fa-phone pright-10"></i> 0141-2744172<br>
                        <i class="fa fa-phone pright-10"></i> 0141-2744211<br>
                        <i class="fa fa-envelope-o pright-10"></i> <a href="#">contact@domain.com</a>
                    </address>
                </div>
                <div class="one_third">
                    <p class="nospace btmspace-10">Stay Up to Date With What's Happening</p>
                    <ul class="faico clear">
                        <li><a class="faicon-twitter" href="https://twitter.com/PoliceRajasthan"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a class="faicon-linkedin" href="https://in.linkedin.com/company/rajasthan-police"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a class="faicon-facebook" href="https://www.facebook.com/PoliceRajasthan"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a class="faicon-instagram" href="https://www.instagram.com/PoliceRajasthan"><i
                                    class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.fitvids.min.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
    <script src="layout/scripts/tabslet/jquery.tabslet.min.js"></script>
</body>

</html>


<?php
} else {
    header("Location: login.php");
}
?>