<?php
/*
//used to connect to database
$host = "localhost";
$db_name = "grsbjogja";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
//show error
catch (PDOException $ex) {
    echo "Connection error: ".$ex->getMessage();
}
*/

mysql_connect("localhost","root","root");
mysql_select_db("grsbjogja");

?>
 
