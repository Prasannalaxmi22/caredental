<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="CareDental";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
session_start();
$username=$_SESSION['username'];
$query = mysqli_query($conn, "SELECT * FROM medhist WHERE Username='$username'");
    if(mysqli_num_rows($query) != 0){
        echo "<script type='text/javascript'>
        location='medretreive.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        location='medhistory.php';
        </script>";
    }
    ?>