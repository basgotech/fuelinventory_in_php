<?php 	

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "gsms";
$store_url = "http://localhost/fuelinventory_in_php/fuelinventory_in_php/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>