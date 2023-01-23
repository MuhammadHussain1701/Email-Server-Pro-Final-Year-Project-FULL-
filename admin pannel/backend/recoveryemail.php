<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      
                $sql = "SELECT * FROM `signup` WHERE `Email`='$email'";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $to = "4everliving786@gmail.com";
                    $subject = "<a href='../monster-html/changepassword.php?email=<?= $email?>'>Click Here to Change Password </a>";
                    $from=$_POST["email"];
                    $msg=$_POST["msg"];
                    $headers = "From: $email";
                
                if(mail($to,$subject,$msg,$headers)){
                    $_SESSION['Email_status'] = "Email Successfully Sent";
                     header("location: ../monster-html/verifyemail.php");
                    }else{
                        $_SESSION['Email_status'] = "Email Not Sent";
                        header("location: ../monster-html/verifyemail.php");
                    }
                    
                } else {
                  $_SESSION['Email_status'] = "Email Not Found.";
                  header("location: ../monster-html/verifyemail.php");
                }
                $conn->close();
                   
    

 
        }
?>