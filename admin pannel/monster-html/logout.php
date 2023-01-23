<?php
include("../backend/config.php");
session_start();

$myusername = $_SESSION['login_user'];


$sql = "UPDATE `signup` SET `user_status`='ofline' WHERE `Email`='$myusername'";

              
if ($conn->query($sql) === TRUE) {
    unset($_SESSION["login_user"]);
    header("Location: login.php");

} else {
   echo " updating user status not work: " . $conn->error;
}


?>