<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="CareDental";
$conn = new mysqli($servername, $username, $password,$dbname);
session_start();
$username=$_SESSION['username'];
$feedback=$_POST['feedback'];
$sql = "INSERT INTO feedback (username,feedback) VALUES ('$username', '$feedback')";
if(mysqli_query($conn, $sql)){ 
    echo "<script type='text/javascript'>
    alert('feedback submitted');
    location='index.html';
    </script>";
  } 
  else{
    echo "ERROR";
  }
?>