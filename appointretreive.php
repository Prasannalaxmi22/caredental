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
  .button {
  background-color: grey;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    </style>
</head>

<body>
<br>
<br>
<br>
<p align="right">
  <input type="button" class="button" value="logout" onclick="window.location.href='logout.php'" />
</p>
    <h1 align="center" style="color:aliceblue">APPOINTMENTS</h1>
    <tr>
    <table id="table1">
    <th>Username</th>
    <th>Time</th>
    <th>Reason</th>
    </tr>
        <?php
        
         $conn = mysqli_connect("localhost", "root", "", "CareDental");
        // Check connection
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM appointment where doctorname='" . $_POST["dname"] . "' and appdate='" . $_POST["date"] . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['apptime']."</td>";
            echo "<td>".$row['reason']."</td>"; 
        }
         } else { echo "0 results"; }
        $conn->close();
?>
    </table>
</body>

</html>