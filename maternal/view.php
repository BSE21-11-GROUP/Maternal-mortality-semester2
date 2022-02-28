<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 80%;
  font-size: 1.2em;
}

th, td {
  text-align: left;
  padding: 1%;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: lightblue;
  color: white;
}

a{font-size:1.2em;
align-items: center;}

</style>
</head>

<center>
<h1>Doctor's page</h1>


</center> <br/><br/>
<?php

 include('connect.php');

 $ab=array();
   
 //Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT  * FROM solve";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo"<center>";

   //echo"<img width=10%  src=word.png >";
  // echo"<br/><br/>";
  echo "<table ><tr><th>problem</th><th>solution</th>
        
  </tr>";

  

  // output data of each row
  
  
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>".$row["problem"]."</td><td>".$row["soln"]."</td></tr>";
    
  }
  echo "</table>";
 echo" </center>";
} else {
  echo "0 results";
}
$conn->close();
?>

</html>