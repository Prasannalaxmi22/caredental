<html>
<head>
<style>
body{
    background-color:black;
}
table.center {
  margin-left:auto; 
  margin-right:auto;
}
table {
  border-collapse: collapse;
  width: 50%;
}
table{
    background-color: grey;
    font-size: 30px;
}

th {
  height: 50px;
}
table td{
  color:black;
}
th, td {
  padding: 10px;
}
table#table1 {
    width:40%; 
    margin-left:32%; 
    margin-right:15%;
  }
  h1{
      font-size: 50px;
  }
  
</style>
</head>
<body>
    <br>
    <br>
    <br>
    <h1 align="center" style="color:grey">PERSONAL DETAILS</h1>
    <table id="table1"> >
        <?php
        session_start();
        $username=$_SESSION['username'];
         $conn = mysqli_connect("localhost", "root", "", "CareDental");
        // Check connection
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM Users where email='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>First Name</td><td>" . $row["firstname"] .  "</td></tr>" ;
        echo "<tr><td>Last Name</td><td>" . $row["lastname"] . "</td></tr>" ;
        echo "<tr><td>Email</td><td>". $row["email"]. "</td></tr>";
        echo "<tr><td>Mobile</td><td>". $row["mobile"] . "</td></tr>";
        }
           echo "</table>";
         } else { echo "0 results"; }
        $conn->close();
?>
    </table>
</body>
</html>