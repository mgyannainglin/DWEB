<?php
    session_start();
    $_SESSION['whereami'] = 'Home -> Booking';
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
    <section class="engine"></section><section class="mbr-section form1 cid-qEYkFzSJWe" id="form1-14">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Create New Booking</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                        <form action="bookingadd.php" method="post">
                    <?php
                        if(isset($_SESSION['auth']['uid']))
                        {
                    ?>
                            <input type="text" style="visibility: hidden;" name="userid" id="userid"
                            value="<?php echo $_SESSION['auth']['uid']; ?>"
                            />
                    <?php
                        }
                    ?>
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="email">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7">Checkin Date</label>
                                        <input type="date" class="form-control" name="checkindate" required="" id="checkindate">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="email">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7">Checkout Date</label>
                                        <input type="date" class="form-control" name="checkoutdate" required="" id="checkoutdate">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="email">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7">Location</label>
                                        <input type="text" class="form-control" name="location" required="" id="location">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="email">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7">No of Rooms</label>
                                        <input type="number" class="form-control" name="no_of_rooms" data-form-field="caption" required="" id="no_of_rooms">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="email">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7">No of Guests</label>
                                        <input type="number" class="form-control" name="no_of_guests" data-form-field="no_of_guests" required="" id="text-form1-14">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="password">
                                    <br>
                                    <a href="../index.php">Back</a>
                                </div>
                                <div class="col-md-4 multi-horizontal">
                                    <button tpye="submit" class="btn btn-primary btn-form display-4">Save</button>
                                </div>
                            </div>
                        </form>
                </div>
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