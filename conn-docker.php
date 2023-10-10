<?php
include "db.php";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection.
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$host = 'http://localhost:8080/';
// $host = 'http://192.168.1.176/karcis/';
// $host = '/karcis/';

error_reporting(E_ALL);


?>
