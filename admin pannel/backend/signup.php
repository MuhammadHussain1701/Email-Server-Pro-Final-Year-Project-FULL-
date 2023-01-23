<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
      $contact = mysqli_real_escape_string($conn,$_POST['contact']); 
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $full_email =  $email."@esp.com";
      $gender = mysqli_real_escape_string($conn,$_POST['gender']); 
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']);
      $filename = $_FILES["choosefile"]["name"];
      $tempname = $_FILES["choosefile"]["tmp_name"];  
      $folder = "image/".$filename;  
      
      $sql = "INSERT INTO `signup`(`Full_Name`, `Email`, `Contact`, `Gender`, `profile_name`, `status`, `password`) 
      VALUES ('$fullname','$full_email','$contact','$gender','$filename','client','$mypassword')";
     
        if ($conn->query($sql) === TRUE) {
            if (move_uploaded_file($tempname, $folder)) {
                $_SESSION['Data']="Account Created Successfully";
                header("location: ../monster-html/login.php");
            }else{
                $_SESSION['Data']="Account Can Not Created Successfully";
                header("location: ../monster-html/login.php");
            }
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        }
?>