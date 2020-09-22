<!DOCTYPE html>
<html>

<head>
    <title>Table with database</title>
    <style>
        body
            {
                background-color:black;
            }
        table {
            background-color:white;
            border-collapse: collapse;
            width: 70%;
            color:black;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        
        th {
            background-color: white;
            color: black;
        }
        
        tr:nth-child(even) {
            background-color: lightgrey;
        }
        table#table1 {
    width:50%; 
    margin-left:25%; 
    margin-right:15%;
  }
    </style>
</head>

<body>
<br>
<br>
<br>
    <h1 align="center" style="color:aliceblue">APPOINTMENTS</h1>
    <tr>
    <table id="table1">
    <th>Doctorname</th>
    <th>Date</th>
    <th>Time</th>
    <th>Reason</th>
    </tr>
        <?php
         session_start();
         $username=$_SESSION['username'];
         $conn = mysqli_connect("localhost", "root", "", "CareDental");
        // Check connection
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM appointment where username='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['doctorname']."</td>";
            echo "<td>".$row['appdate']."</td>";
            echo "<td>".$row['apptime']."</td>";
            echo "<td>".$row['reason']."</td>"; 
        }
         } else { echo "0 results"; }
        $conn->close();
?>
    </table>
</body>

</html>