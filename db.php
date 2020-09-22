
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="CareDental";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$first_name = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$mobile= mysqli_real_escape_string($conn, $_REQUEST['phone']);
$password=mysqli_real_escape_string($conn, $_REQUEST['psw']);
 
// Attempt insert query execution

$query = mysqli_query($conn, "SELECT * FROM Users WHERE email='" . $_POST["email"] . "'");
if(mysqli_num_rows($query) != 0){
    echo "<script type='text/javascript'>
    alert('Email already exists.Try another one');
    location='index.html';
    </script>";
}
else{
  $sql = "INSERT INTO Users (firstname, lastname, email,mobile,passwd) VALUES ('$first_name', '$last_name', '$email','$mobile','$password')";
  if(mysqli_query($conn, $sql)){ 
    echo "<script type='text/javascript'>
    alert('Please verify your email');
    location='otp.php';
    </script>";
  } else{
    echo "ERROR";
  }
}

?>