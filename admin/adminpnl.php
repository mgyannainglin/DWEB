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
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <!--<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">-->
</head>
<body>
    <?php include('../config.php');  ?>
    <section class="mbr-section content4 cid-qGie7bBiMg" id="content4-1z">
        <div class="admin-panel">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h4 class="align-center pb-3 mbr-fonts-style display-2">Admin Panel</h4>
                    <table class="table">
                        <tr>
                            <td><a href="../index.php">Back to Home Page</td>
                            <td></td>
                            <td></td>
                            <td><a href="../logout.php"><Logout</a></td>
                        </tr>
                    </table>

    <!--Contents (Start)-->
                    <u><h3>Contents</h3></u>
                    <table class="admin-table">
                        <tr>
                            <td>Caption</td>
                            <td>Description</td>
                            <td>Page</td>
                            <td>Sorting</td>
                            <td></td>
                        </tr>
            <?php
                $sql = "SELECT * FROM contents WHERE content_status=1";
                if($result=$mysqli->query($sql))
                {
                    while($row=$result->fetch_assoc())
                    {
            ?>
                        <tr>
                            <td><?php echo $row['content_caption']; ?></td>
                            <td><?php echo $row['content_description']; ?></td>
                            <td><?php echo $row['content_page']; ?></td>
                            <td><?php echo $row['content_sorting_number']; ?></td>
                            <td><a href="content/delete.php?entity=content&id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
            <?php
                    }
                }
            ?>
                    </table>
                    <br><br>
    <!--Contents (End)-->

    <!--Bookings (Start)-->
    <u><h3>Bookings</h3></u>
                    <table class="admin-table">
                        <tr>
                            <td>First Name</td>
                            <td>Surname</td>
                            <td>Username</td>
                            <td>Checkin Date</td>
                            <td>Checkout Date</td>
                            <td>Location</td>
                            <td>No. Rooms</td>
                            <td>No. Guests</td>
                            <td>Status</td>
                            <td></td>
                            <td></td>
                        </tr>
            <?php
                $sql = "SELECT c.first_name, c.surname, c.username,b.checkin_date,b.checkout_date,b.location
                        ,b.no_of_rooms,b.no_of_guests,b.booking_status
                        FROM customers c, bookings b
                        WHERE c.id=b.customer_id;";
                if($result=$mysqli->query($sql))
                {
                    while($row=$result->fetch_assoc())
                    {
            ?>
                        <tr>
                            <td><?php echo $row['first_name']; ?></td>
                            <td><?php echo $row['surname']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['checkin_date']; ?></td>
                            <td><?php echo $row['checkout_date']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['no_of_rooms']; ?></td>
                            <td><?php echo $row['no_of_guests']; ?></td>
                            <td><?php echo $row['booking_status']; ?></td>
                            <td><a href="delete.php?entity=content&id=<?php echo $row['id']; ?>">Confirm</a></td>
                            <td><a href="delete.php?entity=content&id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
            <?php
                    }
                }
            ?>
                    </table>
                    <br><br>
    <!--Bookings (Start)-->

    <!--Contents (Start)--><!--
                    <u><h3>Contents</h3></u>
                    <table class="admin-table">
                        <tr>
                            <td>Caption</td>
                            <td>Description</td>
                            <td>Page</td>
                            <td>Sorting</td>
                            <td></td>
                        </tr>
            <?php
                $sql = "SELECT * FROM contents WHERE content_status=1";
                if($result=$mysqli->query($sql))
                {
                    while($row=$result->fetch_assoc())
                    {
            ?>
                        <tr>
                            <td><?php echo $row['content_caption']; ?></td>
                            <td><?php echo $row['content_descritpion']; ?></td>
                            <td><?php echo $row['content_page']; ?></td>
                            <td><?php echo $row['content_sorting_number']; ?></td>
                            <td><a href="delete.php?entity=content&id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
            <?php
                    }
                }
            ?>
                    </table>
                    <br><br>-->
    <!--Contents (End)-->
                    <a href="content/new.php">Add New Content</a>
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