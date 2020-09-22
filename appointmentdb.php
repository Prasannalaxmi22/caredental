o<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="CareDental";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
session_start();
$username=$_SESSION['username'];
$doctorname=$_POST['doctor'];
$date=$_POST['datepicker'];
$time=$_POST['time'];
$reason=$_POST['reason'];
$query = mysqli_query($conn, "SELECT * FROM appointment WHERE doctorname='" . $_POST["doctor"] . "' and appdate='" . $_POST["datepicker"] . "' and apptime='" . $_POST["time"] . "'");
if(mysqli_num_rows($query) != 0){
    echo "<script type='text/javascript'>
    alert('Other appointment exists.Please choose different one');
    location='appointment.php';
    </script>";
}
else{
$sql = "INSERT INTO appointment (username, doctorname, appdate,apptime,reason) VALUES ('$username', '$doctorname', '$date','$time','$reason')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
mysqli_close($conn);
?>