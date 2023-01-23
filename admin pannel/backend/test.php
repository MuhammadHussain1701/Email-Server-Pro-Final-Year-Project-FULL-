<!-- <!-- <?php

include("config.php");
session_start();

if(isset($_GET['aid'])) {

 $id = $_GET['aid'];
 

 $sql = "UPDATE `signup` SET `Acount_status`='active' WHERE `registration_id`='$id'";

 if ($conn->query($sql) === TRUE) {
    header("location: ../monster-html/users.php");
 } else {
   echo "Error updating record: " . $conn->error;
 }


}


// if(isset($_GET['aaid'])) {

//    $id = $_GET['aaid'];
//    $amount = $_GET['rank'];
  
//    $sql = "UPDATE `signup` SET `Acount_status`='active', `amount_status`='paid',`fra`='$amount' WHERE `registration_id`='$id'";
  
//    if ($conn->query($sql) === TRUE) {
//       header("location: ../monster-html/users.php");
//    } else {
//      echo "Error updating record: " . $conn->error;
//    }
  
  
//   }







?>  -->