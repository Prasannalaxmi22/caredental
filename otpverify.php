<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname="CareDental";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
$username=$_SESSION['username'];
$_SESSION['info'] = "";
$otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
	$check_code = "SELECT * FROM otp WHERE code = $otp_code ";
	$code_res = mysqli_query($conn, $check_code);
	if(mysqli_num_rows($code_res) > 0){
		$fetch_data = mysqli_fetch_assoc($code_res);
		$fetch_code = $fetch_data['code'];
		$email = $fetch_data['email'];
		$code = 0;
		$status = 'verified';
		$update_otp = "UPDATE otp SET code = $code, status = '$status' WHERE code = $fetch_code";
		$update_res = mysqli_query($conn, $update_otp);
		if($update_res){
			$_SESSION['username'] = $email;
			header('location: index.html');
			exit();
		}else{
			echo "Failed while updating code!";
		}
	}else{
		echo "You've entered incorrect code!";
	}
?>