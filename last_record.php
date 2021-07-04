<?php
//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'motors_db';
//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );
//check connection 
if(mysqli_connect_errno()){
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
}

$query1 = mysqli_query($connection, "SELECT * FROM motors_values ORDER BY ID DESC LIMIT 1");
$row = mysqli_fetch_array($query1);

$query2 = mysqli_query($connection, "SELECT * FROM run_values ORDER BY ID DESC LIMIT 1");
$print_data2 = mysqli_fetch_array($query2);

echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";
echo"<hr>";

echo "id = ".$row['ID'];
echo "<br>";
echo "Motor1 =  ".$row['v1'];
echo "<br>";
echo "Motor2 =  ".$row['v2'];
echo "<br>";
echo "Motor3 =  ".$row['v3'];
echo "<br>";
echo "Motor4 =  ".$row['v4'];
echo "<br>";
echo "Motor5 =  ".$row['v5'];
echo "<br>";
echo "Motor6 =  ".$row['v6'];
echo"<br>";
echo"<br>";
echo"ON/OFF BUTTON";
echo "<hr>";
echo "id =  ".$print_data2['ID'];
echo"<br>";
echo "isOn =  ".$print_data2['run_value'];
echo "<br>";
echo "<br>";

?>





