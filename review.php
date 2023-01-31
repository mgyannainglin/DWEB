<?php
    session_start();
    $_SESSION['whereami'] = 'Home -> Reviews';
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
    <section class="mbr-section content4 cid-qGie7bBiMg" id="content4-1z">

        

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8"><br><br>
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">Reviews</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="features4 cid-qEYTIvj48y" id="features4-1n">
    	<div class="container">
            <div class="media-container-row">
        <?php
            include 'config.php';
            $sql="SELECT * FROM reviews WHERE 1=1";
            if($result=$mysqli->query($sql))
            {
                while($row=$result->fetch_assoc())
                {
                    $username = $row['reviewer_name'];
                    $content = $row['reviewer_context'];
        ?>
                 <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper media-container-row">
                        <div class="card-box">
                            <h4 class="card-title pb-3 mbr-fonts-style display-7"><?php echo $row['reviewer_name']; ?><br></h4>
                            <p class="mbr-text mbr-fonts-style display-7"><?php echo $row['reviewer_context'];  ?><br></p>
                        </div>
                    </div>
                </div>
        <?php
                }
            }
        ?>

                
            </div>
        </div>
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