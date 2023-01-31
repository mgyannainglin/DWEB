<?php
    include '../../config.php';
    $id = $_GET['id'];
    $description = $_POST['description'];
    $sql = "UPDATE contents SET content_status=2 WHERE id=$id";
    echo $sql;
    $mysqli->query($sql);
    header("location:../adminpnl.php");
?>