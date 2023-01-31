<?php
    include 'config.php';
    $userid = $_POST['userid'];
    $checkindate = $_POST['checkindate'];
    $checkoutdate = $_POST['checkoutdate'];
    $location = $_POST['location'];
    $no_of_rooms = $_POST['no_of_rooms'];
    $no_of_guests = $_POST['no_of_guests'];
    $sql = "INSERT INTO bookings
            (customer_id,checkin_date,checkout_date,location,no_of_rooms,no_of_guests,booking_status) 
            VALUES 
            ($userid,'$checkindate','$checkoutdate','$location', $no_of_rooms, $no_of_guests, 1)";
    echo $sql;
    $mysqli->query($sql); 
    header("location:bookingsubmitted.php");
?>