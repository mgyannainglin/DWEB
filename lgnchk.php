<?php
    include 'config.php';
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $encrypted = md5($password);
        $sql = "SELECT * FROM customers WHERE username='$email' AND '$encrypted'";
        $result = $mysqli->query($sql);
	    $no_of_row = mysqli_num_rows($result);
        echo $no_of_row;
        if($no_of_row > 0)
        {
            session_start();
            while($row = $result->fetch_assoc())
            {
                $_SESSION['auth']['uid'] = $row['id'];
                $_SESSION['auth']['username'] = $row['username'];
                header("location: index.php");
            }
        }
        else
        {	
            header("location: index.php?login=0");	
        }
    }
    else
    {	
        header("location: index.php?login=0");	
    }
?>