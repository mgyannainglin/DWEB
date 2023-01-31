<?php
    include '../../config.php';
    $caption = $_POST['caption'];
    $description = $_POST['description'];
    $page = $_POST['page'];
    $sorting_number = $_POST['sortingnumber'];
    $sql = "INSERT INTO contents (content_caption,content_description,content_page,content_sorting_number,user_id,content_status) 
            VALUES 
            ('$caption','$description','$page',$sorting_number,1,1)";
    $mysqli->query($sql);
    header("location:../adminpnl.php");
?>