<?php
    include 'config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $message_text = $_POST['message_text'];
    $sql = "INSERT INTO contacts (name,email,contact_no,message_text) 
            VALUES 
            ('$name','$email','$contact_no','$message_text')";
    $mysqli->query($sql);
    header("location:added.php");
?>