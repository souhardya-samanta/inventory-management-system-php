<?php 	

$localhost = "localhost";
$username = "samn";
$password = "123456";
$dbname = "store";
$store_url = "http://localhost/inventory-management-system-php/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>