<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="CareDental";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$email = $_POST['email'];
$_SESSION['username']=$email;
$username=$email;
$query = mysqli_query($conn, "SELECT * FROM Users WHERE email='" . $_POST["email"] . "'");
if(mysqli_num_rows($query) != 0){
    $code = rand(999999, 111111);
    $status = "notverified";
    $insert_data = "INSERT INTO otp (username, code, status)
                        values('$username','$code', '$status')";
    $data_check = mysqli_query($conn, $insert_data);
    if($data_check){
        $subject = "Email Verification Code";
        $message = "Your verification code is $code";
        $sender = "From: caredental0925@gmail.com";
        if(mail($email, $subject, $message, $sender)){
            $info = "We've sent a verification code to your email - $email";
            $_SESSION['info'] = $info;
            header('location:otppage.php');
            exit();
        }
        else{
            echo "<script type='text/javascript'>
            alert('Wrong email address');
            location='otp.php';
            </script>";
        }
}
else{
    echo $conn->error;;
}
}
?>