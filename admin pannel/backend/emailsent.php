<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $toemail = mysqli_real_escape_string($conn,$_POST['toemail']);
      $fromemail = mysqli_real_escape_string($conn,$_POST['fromemail']);
      $subject = mysqli_real_escape_string($conn,$_POST['subject']); 
      $text = mysqli_real_escape_string($conn,$_POST['text']);
      $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
      $filename = $_FILES["choosefile"]["name"];
      $tempname = $_FILES["choosefile"]["tmp_name"];  
      $folder = "image/".$filename; 
      
      
      $filename1 = $_FILES["choosefile1"]["name"];
      $tempname1 = $_FILES["choosefile1"]["tmp_name"];  
      $folder1 = "image/".$filename1;  
      
      if(empty($filename1)){
          
              if ($_FILES["choosefile"]["size"] > 100000000) {
                $_SESSION['filesize']="Your File is Geater Than 100 MBs";
                header("location: ../monster-html/sentemails.php");
              }else{
                    if (move_uploaded_file($tempname, $folder)) {
                        $sql = "INSERT INTO `email`(`From_Email`, `To_Email`, `Subject`, `Message`, `Attachment_Path`,`signature`) 
                                        VALUES ('$fromemail','$toemail','$subject','$text','$filename','$filename1')";
                                           if ($conn->query($sql) === TRUE) {

                                                header("location: ../monster-html/sentemails.php");
                                        } else {
                                                echo "Error: " . $sql . "<br>" . $conn->error;
                                        }
                                
                
            }
             
         }
          
      }else{
             $ext = pathinfo($filename1, PATHINFO_EXTENSION);
      if(!array_key_exists($ext, $allowed)){
        $_SESSION['filesize']="Error: Please select a valid file format.";
        header("location: ../monster-html/sentemails.php");
       
          
      }
      }
     
     
      
      
       
          
 
     
      
        if ($_FILES["choosefile"]["size"] > 100000000) {
            $_SESSION['filesize']="Your File is Geater Than 100 MBs";
            header("location: ../monster-html/sentemails.php");
            
        }else{
        
     
      
                        if (move_uploaded_file($tempname, $folder)) {
                            
                            
                            
                                if (move_uploaded_file($tempname1, $folder1)) {
                                    
                                     
                                        $sql = "INSERT INTO `email`(`From_Email`, `To_Email`, `Subject`, `Message`, `Attachment_Path`,`signature`) 
                                        VALUES ('$fromemail','$toemail','$subject','$text','$filename','$filename1')";
                                           if ($conn->query($sql) === TRUE) {

                                        header("location: ../monster-html/sentemails.php");
                                        } else {
                                                echo "Error: " . $sql . "<br>" . $conn->error;
                                        }
                                
                                }
                        }else{
                            
                                            
                                $sql = "INSERT INTO `email`(`From_Email`, `To_Email`, `Subject`, `Message`, `Attachment_Path`,`signature`) 
                                VALUES ('$fromemail','$toemail','$subject','$text','$filename','$filename1')";
                                if ($conn->query($sql) === TRUE) {

                                        header("location: ../monster-html/sentemails.php");
                                } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                }
                                
                        }
                
        }
}
     
?>