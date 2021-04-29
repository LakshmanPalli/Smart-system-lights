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
$sql = "SELECT * FROM humid_temp_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo json_encode([$row]);
  }
} else {
  echo "0 results";
}
?>
