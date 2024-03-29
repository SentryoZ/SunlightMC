<!DOCTYPE html>
<html lang="en-us" class="no-js">

<head>
    <meta charset="utf-8">
    <title>SunlightMC</title>
    <meta name="description" content="Hardcore gamer community!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Madeon08">
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>


    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-retina-ipad.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-retina-iphone.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-standard-ipad.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-standard-iphone.png">

    <!-- ============== Resources style ============== -->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- Modernizr runs quickly on page load to detect features -->

</head>

<body>

<!-- Page preloader -->
<div id="loading">
    <div id="preloader">
        <span></span>
        <span></span>
    </div>
</div>

<!-- Overlay and Star effect -->
<div class="global-overlay">
    <div class="overlay skew-part">

        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>

    </div>
</div>

<!-- START - Home/Left Part -->
<section id="left-side">

    <!-- Your logo -->
    <img src="img/logo.png" alt="" class="brand-logo"/>

    <div class="content">
        <h1 class="text-intro opacity-0">www.sunlightmc.com<br></h1>
        <p class="text-intro opacity-0">Welcome to the community!</p>
        <br>
        <nav>
            <ul>
                <li>
                    <a href="#" onclick="copyIp()" class="light-btn text-intro opacity-0">COPY IP</a>
                    <input type="text" value="sunlightmc.com" id="myInput" hidden>
                </li>
                <li>
                    <a href="https://discord.gg/22Bad9qY" class="action-btn trigger text-intro opacity-0">DISCORD</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Social icons -->
    <div class="social-icons">
    </div>

</section>
<!-- END - Home/Left Part -->

<footer>

    <p style="color:white">Mojang © 2009-2021. "Minecraft" is a trademark of Mojang AB</p>

</footer>

<!-- * Libraries jQuery, Easing and Bootstrap - Be careful to not remove them * -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.easings.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- PhotoSwipe Core JS file -->
<script src="js/velocity.min.js"></script>

<!-- PhotoSwipe UI JS file -->
<script src="js/velocity.ui.min.js"></script>

<!-- Slideshow/Image plugin -->
<script src="js/vegas.js"></script>
<!-- Main JS File -->
<script src="js/main.js"></script>
<script src="js/status.js"></script>

<script>
    function copyIp() {
        let server_ip = document.getElementById("myInput");
        server_ip.select();
        server_ip.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(server_ip.value);
        alert("Đã copy IP: " + server_ip.value);
    }
</script>
</body>

</html>