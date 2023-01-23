<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      $id = mysqli_real_escape_string($conn,$_GET['id']);
     
      $sql = "UPDATE `email` SET `Sender_Status`='hidden' WHERE `id`='$id'";
   
        if ($conn->query($sql) === TRUE) {
            header("location: ../monster-html/sentemails.php");

        } else {
         header("location: ../monster-html/sentemails.php");

        }

        $conn->close();
   
   }
?>