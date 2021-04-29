<?php
$servername = "localhost";
$username = "id15340690_arduino";
$password = "6mT??G4nM0Y0STIF";
$dbname = "id15340690_iot_value";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT * FROM value_table";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
      echo "$row[p1]";
      echo "$row[p2]";
      echo "$row[p3]";
      echo "$row[p4]";
      echo "$row[p5]";
      echo "$row[p6]<br>";
      
      if("$row[p1]"==1)
  {
      echo "Light 1 = ON</br>";
  }
  else
  {
     echo "Light 1 = OFF</br>"; 
  }
  if("$row[p2]"==1)
  {
      echo "Light 2 = ON</br>";
  }
  else
  {
     echo "Light 2 = OFF</br>"; 
  }
    if("$row[p3]"==1)
  {
      echo "Light 3 = ON</br>";
  }
  else
  {
     echo "Light 3 = OFF</br>"; 
  }
  if("$row[p4]"==1)
  {
      echo "Light 4 = ON</br>";
  }
  else
  {
     echo "Light 4 = OFF</br>"; 
  }
  if("$row[p5]"==1)
  {
      echo "Light 5 = ON</br>";
  }
  else
  {
     echo "Light 5 = OFF</br>"; 
  }
  if("$row[p6]"==1)
  {
      echo "Light 6 = ON</br>";
  }
  else
  {
     echo "Light 6 = OFF</br>"; 
     
  }
     echo "<i> make it lite </i>";
  }
  
} 
else {
  echo "You r doing good, go on..:) ";
}
?>

