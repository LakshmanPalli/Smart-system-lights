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

$sql = "SELECT * FROM humid_temp_table";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
      echo "Temperature: "."$row[temp]"."C <br>";
      
      echo "Humidity: "."$row[humid]"."% <br>";
      
      echo "Water level "."$row[wl] <br>";
      
      /*
      if("$row[temp]">30)
  {
      echo "Light 1 = ON</br>";
  }
  else
  {
     echo "Light 1 = OFF</br>"; 
  }
  if("$row[humid]"<24)
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
     echo "Ohh bang control out of reach, try again.. ";
  } 
  */
  }
}
else {
  echo "Hey there, got some error, might be in db give a check.. "; 
} 

?>
