<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $pnumber = mysqli_real_escape_string($conn,$_POST['pnumber']); 
      $gender = mysqli_real_escape_string($conn,$_POST['gender']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);
       $filename1 = mysqli_real_escape_string($conn,$_POST['choosefile1']);
      
       $filename = $_FILES["choosefile"]["name"];
      $tempname = $_FILES["choosefile"]["tmp_name"];  
      $folder = "image/".$filename; 
      
     
      
 
      
      if($filename!=NULL){
          
         
          
           if (move_uploaded_file($tempname, $folder)) {
                           
                            $sql = "UPDATE `signup` SET `Full_Name`='$fullname',`Email`='$email',`Contact`='$pnumber',`Gender`='$gender',`profile_name`='$filename'
                              ,`password`='$password' WHERE `registration_id`='$id'";
                             
                                if ($conn->query($sql) === TRUE) {
                                    $_SESSION['Data']="Data Updated Successfully";
                                    header("location: ../monster-html/adduser.php?id=$id");
                        
                                } else {
                                    $_SESSION['Data']="Data Not Updating Successfully";
                                 header("location: ../monster-html/index.php");
                        
                                }
               
               
           }else{
                 var_dump("i am here 1");
           }
          
          
          
          
          
      }else{
          
               
               
               
                            $sql = "UPDATE `signup` SET `Full_Name`='$fullname',`Email`='$email',`Contact`='$pnumber',`Gender`='$gender',`profile_name`='$filename1'
                              ,`password`='$password' WHERE `registration_id`='$id'";
                             
                                if ($conn->query($sql) === TRUE) {
                                    $_SESSION['Data']="Data Updated Successfully";
                                    header("location: ../monster-html/adduser.php?id=$id");
                        
                                } else {
                                    $_SESSION['Data']="Data Not Updating Successfully";
                                 header("location: ../monster-html/index.php");
                        
                                }
               
        
          
          
          
      }
      


     

        $conn->close();
   
   }
?>