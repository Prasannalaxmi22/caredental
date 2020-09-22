<?php
session_start();
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","","CareDental");
	$email=$_POST["email"];
	$password=$_POST["psw"];
if($email=='caredental@gmail.com' and $password=='caredental@123')
{ 
	session_start();
    $_SESSION['username'] = $email;
	header("location:doctor.html");
}
else{
if($password=='caredental' and $email!='caredental@gmail.com')
{
$result = mysqli_query($conn,"SELECT * FROM Users WHERE email='" . $_POST["email"] . "'");
$count=mysqli_num_rows($result);
if($count == 1)
{
session_start();
$_SESSION['username'] = $email;
header("location:loginnext.html");
}
}
else{
$result1 = mysqli_query($conn,"SELECT * FROM Users WHERE email='" . $_POST["email"] . "'  and passwd = '". $_POST["psw"]."'");
$count1=mysqli_num_rows($result1);
if($count1 == 1)
{
session_start();
$_SESSION['username'] = $email;
header("location:loginnext.html");
}
else {
	echo "<script type='text/javascript'>
	alert('Wrong Username or Password.Please login again');
	location='index.html';
	</script>";
	
}
	}
}
}
?>