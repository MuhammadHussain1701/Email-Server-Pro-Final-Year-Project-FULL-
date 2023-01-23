<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
      $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);
      
      if($password == $confirmpassword){
          
          $sql = "UPDATE `signup` SET `password`='$password' WHERE `Email`='$email'";
          
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                   
                    $_SESSION['Password_status'] = "Password Update Susseccfully";
                     header("location: ../monster-html/changepassword.php");
                
                  
                } else {
                  $_SESSION['Password_status_No'] = "Password Doesnt Update Susseccfully";
                  header("location: ../monster-html/changepassword.php");
                }
                
          
      }else{
          
           $_SESSION['Password_status_No'] = "Password Doesnt Match";
           header("location: ../monster-html/changepassword.php");
      }
       
      
 
        }
?>