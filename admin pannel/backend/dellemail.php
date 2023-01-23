<?php
   include("config.php");
   session_start();
                    $id = $_GET['id'];
                    $sql = "DELETE FROM `email` WHERE `id`='$id'";
                    
                    if ($conn->query($sql) === TRUE) {
                       
                    header("location: ../monster-html/sentemails.php");
                    
                    } else {
                   
                    }
                   
                    
                
             
                
     
?>