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
            color: white;
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
    <h1 align="center" style="color:aliceblue">MEDICAL HISTORY</h1>
    <table id="table1">
        <?php
        
         $conn = mysqli_connect("localhost", "root", "", "CareDental");
         session_start();
         $username=$_SESSION['username'];
        // Check connection
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM medhist where Username='$username'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr><td>BloodPressure</td><td>" . $row["BloodPressure"] .  "</td></tr>" ;
        echo "<tr><td>HeartDisease</td><td>" . $row["HeartDisease"] . "</td></tr>" ;
        echo "<tr><td>Asthama</td><td>". $row["Asthama"]. "</td></tr>";
        echo "<tr><td>Diabetes</td><td>" . $row["Diabetes"] . "</td></tr>" ;
        echo "<tr><td>Jaundice</td><td>". $row["Jaundice"] . "</td></tr>";
        echo "<tr><td>Epilepsy</td><td>". $row["Epilepsy"] . "</td></tr>";
        echo "<tr><td>Allergies</td><td>". $row["Allergies"] . "</td></tr>";
        echo "<tr><td>BleedingDisorder</td><td>". $row["BleedingDisorder"] . "</td></tr>";
        echo "<tr><td>Thyroid</td><td>" . $row["Thyroid"] . "</td></tr>";
        echo "<tr><td>LiverDisease</td><td>" . $row["LiverDisease"] ."</td></tr>";
        echo "<tr><td>CancerRelated</td><td>" . $row["CancerRelated"] ."</td></tr>";
        echo "<tr><td>AIDS</td><td>" . $row["AIDS"] ."</td></tr>";
        echo "<tr><td>Tobacco/td><td>" . $row["TOBACCO"] . "</td></tr>";
        echo "<tr><td>Other</td><td>" . $row["Other"] ."</td></tr>";
        }
           echo "</table>";
         } else { echo "0 results"; }
        $conn->close();
?>
    </table>
</body>

</html>