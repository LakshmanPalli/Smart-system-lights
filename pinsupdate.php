<!DOCTYPE html>

<html>
   <head>
      <title>HTML Meta Tag</title>

      <meta http-equiv = "refresh" content = "0.5; url = https://inazumakidou.000webhostapp.com" />

   </head>


   <body>
      <p>Led state is Changed successfully</p>
   </body>


</html>

<?php
$servername = "localhost";
$username = "id15340690_arduino";
$password = "6mT??G4nM0Y0STIF";
$dbname = "id15340690_iot_value";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['p1'])) 
{
  $p1 = $_GET['p1'];
   
	// Fire SQL query to update value_table by id
    $sql = "UPDATE value_table SET p1= '$p1'";
    $result = $conn->query($sql);
} 
if (isset($_GET['p2'])) 
{
  $p2 = $_GET['p2'];
// Fire SQL query to update value_table by id
    $sql = "UPDATE value_table SET p2= '$p2'";
    $result = $conn->query($sql);
}
if (isset($_GET['p3'])) 
{
  $p3 = $_GET['p3'];
   
	// Fire SQL query to update value_table by id
    $sql = "UPDATE value_table SET p3= '$p3'";
    $result = $conn->query($sql);
}
if (isset($_GET['p4'])) 
{
  $p4 = $_GET['p4'];
   
	// Fire SQL query to update value_table by id
    $sql = "UPDATE value_table SET p4= '$p4'";
    $result = $conn->query($sql);
}
if (isset($_GET['p5'])) 
{
  $p5 = $_GET['p5'];
   
	// Fire SQL query to update value_table by id
    $sql = "UPDATE value_table SET p5= '$p5'";
    $result = $conn->query($sql);
}
if (isset($_GET['p6'])) 
{
  $p6 = $_GET['p6'];
   
	// Fire SQL query to update value_table by id
    $sql = "UPDATE value_table SET p6= '$p6'";
    $result = $conn->query($sql);
}
   
?>
