<?php
$servername = "localhost";
$username = "eversco_db";
$password = "ZlQ{]u5E&]XV";
$database_name = "eversco_emaipro";

$conn = new mysqli($servername, $username, $password, $database_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";    


?> 