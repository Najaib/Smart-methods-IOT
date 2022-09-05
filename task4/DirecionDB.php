<?php

// to connect to DB
$conn = mysqli_connect('localhost', 'root','');
    
if(!$conn){
    die('Connction Failed');
}
$db_select = mysqli_select_db($conn,'directionsDB');

if(!$db_select){
    die('Sorry, there is no database named directionsDB');
}

// to inser the values in the tabel TheDirections
$typeOfDirection = $_POST['typeOfDirection'];
$sql = "INSERT INTO TheDirections (direction) VALUES ('$typeOfDirection')";

if ($conn->query($sql) === TRUE) {
  echo "$typeOfDirection";
} else {
  echo "Error";
}


if($typeOfDirection=="Left")
	{	 
	 echo "L";
	}
	elseif($typeOfDirection=="Right")
	{
	 echo "R";
	}
	elseif($typeOfDirection=="Forword")
	{
	 echo "F";
	}
	elseif($typeOfDirection=="Backword")
	{
	 echo "B";
	}
	elseif($typeOfDirection=="Stop")
	{
	 echo "S";
	}

$conn->close();
?>