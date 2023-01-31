<?php
    session_start();
    $_SESSION['whereami'] = 'Home';
    include 'config.php';
    $sql = "SELECT total_views FROM site_preferences WHERE id=1";
    if($result=$mysqli->query($sql))
    {
        while($row=$result->fetch_assoc())
        {
            $_SESSION['total_views'] = $row['total_views'];
        }
    }
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/gwsc.jpg" type="image/x-icon">
  <meta name="description" content="">
  
  <title>GWSC</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">  
</head>
<body>   
    <?php
        include 'menu.php';
        if(isset($_SESSION['auth']['uid']) && isset($_SESSION['auth']['username']))
        {
    ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php">Welcome, 
                        <?php echo $_SESSION['auth']['username']; ?>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link link text-black display-4" href="login.php">Login</a></li>
            </ul>
    </div>
    <?php
        }
    ?>

<section class="engine"><a href="https://mobirise.info/v"></a></section><section class="mbr-section article content1 cid-r9BzYSCu87" id="content1-3y">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7"></div>
        </div>
    </div>
</section>

<section class="mbr-section article content9 cid-r9BrMpqv5A" id="content9-3w">
    <div class="container">
        <div class="welcome-bar">
            <?php
                if(isset($_SESSION['auth']['uid']) && isset($_SESSION['auth']['username']))
                {
            ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-black display-4" href="index.php">Welcome, 
                                <?php echo $_SESSION['auth']['username']; ?>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="login.php">Login</a></li>
                    </ul>
            </div>
            <?php
                }
            ?>
        </div>
        <div class="inner-container" style="width: 100%;">
            <hr class="line" style="width: 53%;">
            <div class="section-text align-center mbr-fonts-style display-5">Welcome to a little piece of paradise. Discover the height of nature and swimming at GWSC and indulge in the pristine tranquility of Mother Nature. Relax, reconnect, and rejuvenate with GWSC. We invite you to forget the world outside and unravel the mysteries of an untouched camping and swimming experiences.</div>
            <hr class="line" style="width: 53%;">
        </div>
        </div>
</section>

<section class="mbr-section content4 cid-qGie7bBiMg" id="content4-1z">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">What is GWSC?</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Welcome to a little piece of paradise. Discover the height of nature and swimming at GWSC and indulge in the pristine tranquility of Mother Nature. Relax, reconnect, and rejuvenate with GWSC. We invite you to forget the world outside and unravel the mysteries of an untouched camping and swimming experiences.</h3>

            </div>
        </div>
    </div>
</section>
<section class="mbr-section content4 cid-qGie7bBiMg" id="content4-1z">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <?php include 'slideshow.php'; ?>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section content4 cid-qGie7bBiMg" id="content4-1z">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <!--Map Area-->
                <div class="mapouter"><div class="gmap_canvas"><iframe width="760" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:350px;width:760px;}</style><a href="https://www.embedgooglemap.net">embed google maps iframe</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:350px;width:760px;}</style></div></div>
                <!--Map Area-->
            </div>
        </div>
    </div>
</section>
<?php
    include 'viewercounter.php';
    include 'footer.php';
?>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

</body>
</html>