<!DOCTYPE html>

<html>
   <head>
      <title>HTML Meta Tag</title>

      <meta http-equiv = "refresh" content = "0.5; url = https://inazumakidou.000webhostapp.com" />

   </head>


   <body>
      <p>Values of temperature & humidity are Changed successfully</p>
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

if (isset($_GET['temp'])) 
{
  $temp = $_GET['temp'];
   
	// Fire SQL query to update value_table by id
    $sql = "UPDATE humid_temp_table SET temp= '$temp'";
    $result = $conn->query($sql);
} 
if (isset($_GET['humid'])) 
{
  $humid = $_GET['humid'];
// Fire SQL query to update value_table by id
    $sql = "UPDATE humid_temp_table SET humid= '$humid'";
    $result = $conn->query($sql);
}

?>
