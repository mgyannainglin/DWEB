<?php
    session_start();
    $_SESSION['whereami'] = 'Home -> Information';
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
    ?>
<br><br>
<section class="mbr-section content4 cid-qGie7bBiMg" id="content4-1z">
<?php
            include 'config.php';
            $sql="SELECT * FROM contents WHERE content_page='information' and content_status=1";
            if($result=$mysqli->query($sql))
            {
                while($row=$result->fetch_assoc())
                {
        ?>
                 <div class="container">
                    <div class="media-container-row">
                        <div class="title col-12 col-md-8">
                            <h2 class="align-center pb-3 mbr-fonts-style display-2"><?php echo $row['content_caption']; ?></h2>
                            <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"><?php echo $row['content_description']; ?></h3>
                            <h4>____________________________________________</h4>
                        </div>
                    </div>
                </div>
        <?php
                }
            }
        ?>
</section>

<?php
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