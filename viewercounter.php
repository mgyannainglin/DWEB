<?php
    include 'config.php';
    $sql = "UPDATE site_preferences SET total_views=total_views+1";
    $mysqli->query($sql);
?>