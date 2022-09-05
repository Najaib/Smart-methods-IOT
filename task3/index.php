<?php

$conn = mysqli_connect('localhost','root','root','sensorvalues');

$value = $_GET['integer'];

if (isset($_GET['submit'])){
    $sql = "INSERT INTO sensor_values(sensorvalue)VALUES('$value')";
    mysqli_query($conn,$sql);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sensor values</title>
</head>

<body>
<form action="index.php" method="get">

<input type="text" name="integer">
<input type="submit" name="submit" value="send">

</form>
</body>


</html>