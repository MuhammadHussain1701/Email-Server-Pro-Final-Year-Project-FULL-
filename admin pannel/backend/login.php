<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM `signup` WHERE `Email`='$myusername' AND `password`='$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
        $_SESSION['login_user'] = $myusername;

               $sql = "UPDATE `signup` SET `user_status`='online' WHERE `Email`='$myusername'";
              
               if ($conn->query($sql) === TRUE) {

                  echo "
                  <script>
                      window.open('../monster-html/index.php','_self');
                  </script>";

               } else {
                  echo " updating user status not work: " . $conn->error;
               }
        














             
         
           
         
      }else {
         $_SESSION['Error_login'] = "Your Login Name or Password is invalid";
         header("location: ../monster-html/login.php");
         
      }
   }
?>