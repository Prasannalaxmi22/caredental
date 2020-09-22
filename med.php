<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="CareDental";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
session_start();
$username=$_SESSION['username'];
$bp = $_POST['bp'];
$heart = $_POST['heart'];
$asthama=  $_POST['asthama'];
$diabetes= $_POST['diabetes'];
$jaundice=  $_POST['jaundice'];
$epilepsy = $_POST['epilepsy'];
$allergy=$_POST['allergy'];
$bleed =  $_POST['bleed'];
$thyroid =  $_POST['thyroid'];
$liver = $_POST['liver'];
$cancer= $_POST['cancer'];
$aids= $_POST['aids'];
$tobacco =  $_POST['alcohol'];
$other= $_POST['other'];


$sql = "INSERT INTO Medhist (Username,BloodPressure, HeartDisease, Asthama,Diabetes,Jaundice,Epilepsy,Allergies,BleedingDisorder,Thyroid,LiverDisease,CancerRelated,AIDS,TOBACCO,Other) VALUES ('$username', '$bp', '$heart','$asthama','$diabetes','$jaundice', '$epilepsy', '$allergy','$bleed','$thyroid','$liver', '$cancer', '$aids','$tobacco','$other')";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:loginnext.html");
    }
    
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    

$conn->close();
?> 