<?php
    session_start();
    $_SESSION['whereami'] = 'Home -> Admin -> Login';
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.9.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../assets/images/gwsc.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>GWSC</title>
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
 <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>

    <section class="engine"><a href=""></a></section><section class="mbr-section form1 cid-qEYkFzSJWe" id="form1-14">
        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-lg-8">
                    <b><h5class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Admin Login</h5></b>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="media-container-column col-lg-8" data-form-type="formoid">
                        <div data-form-alert="" hidden="">Thank you for your contact.
    We will reply to your message soon.</div>
                        <form action="lgnchk.php" method="post">
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="email">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7" for="email-form1-14">Email</label>
                                        <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-14">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal" data-for="password">
                                    <div class="form-group">
                                        <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-14">Password</label>
                                        <input type="password" class="form-control" name="password" data-form-field="Password" id="password-form1-14">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-sm-offset">
                                <div class="col-md-4 multi-horizontal">
                                    <button tpye="submit" class="btn btn-primary btn-form display-4">Login</button>
                                </div>
                                <!--
                                <div class="col-md-4 multi-horizontal" data-for="password">
                                    <br>
                                    <a href="user/new.php">Create New Account</a>
                                </div>
                                -->
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </section>
    <section class="engine"></section><section class="mbr-section article content1 cid-r9BzYSCu87" id="content1-3y">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7"></div>
            </div>
        </div>
    </section>

<?php
    include '../footer.php';
?>
  <script src="../../assets/web/../../assets/jquery/jquery.min.js"></script>
  <script src="../../assets/popper/popper.min.js"></script>
  <script src="../../assets/tether/tether.min.js"></script>
  <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../../assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../../assets/dropdown/js/script.min.js"></script>
  <script src="../../assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="../../assets/theme/js/script.js"></script>

</body>
</html>