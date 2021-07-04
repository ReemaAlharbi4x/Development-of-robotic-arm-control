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
$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];
if(isset($_POST['save'])){
    $my_query = "INSERT INTO motors_values (v1, v2, v3, v4, v5, v6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', $v6)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['on'])) {

    $my_query = "INSERT INTO run_values (run_value) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to add <br>";
    }
}else if(isset($_POST['off'])) {
    $my_query = "INSERT INTO run_values (run_value) VALUES (0)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to add <br>";
    }
}
?>