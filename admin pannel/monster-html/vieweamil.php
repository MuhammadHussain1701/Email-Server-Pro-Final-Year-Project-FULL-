<?php
session_start();

// var_dump($_SESSION['login_user']);
if(isset($_SESSION['login_user'])){
            include 'header.php';    
            include 'menubar.php';
        ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                      
                    </div>
                   
                    <div class="col-md-6 col-4 align-self-center">
                      

                    </div>
                </div>

                
            </div>


             
          
            <div class="container-fluid">
         



                <div class="row">
                    <div class="col-sm-12">
                        <div class="card"> <?php
                                                include '../backend/config.php';
                                                $id = $_GET['id'];
                                                $sql ="SELECT * FROM `email` WHERE `id`='$id'";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                $row = $result->fetch_assoc();    
                                                    ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">FROM EMAILS</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title"><?= $row['From_Email']?></h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">TO EMAILS</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title"><?= $row['To_Email']?></h4>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">SUBJECT</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title"><?= $row['Subject']?></h4>
                                    </div>
                                </div>
                                <?php 
                                
                                    if(empty($row['Attachment_Path'])){
                                
                               
                                    }else{
                                                    ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4 class="card-title">ATTACHMENT</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <h4 class="card-title text-justify"><a href="../backend/image/<?= $row['Attachment_Path']?>"
                                                               >Click Here To View
                                                                </a></h4>
                                                </div>
                                            </div>
                                            
                                              <?php 
                                    }
                                    
                                    
                                     if(empty($row['signature'])){
                               
                                }else{
                                    
                                     
                                ?>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">SIGNATURE</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title text-justify">
                                        <img src="../backend/image/<?= $row['signature']?>" alt="..." class="img-thumbnail">
                                        </h4>
                                    </div>
                                </div>
                                
                                <?php
                                    
                                }
                                ?>
                                
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="card-title">MESSAGE</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="card-title text-justify"><?= $row['Message']?></h4>
                                    </div>
                                </div>
                                 
                                
                            </div>


                            <?php
                                                }else {?>
                                                <tr>
                                                   <div class="alert alert-info" role="alert">
                                                   <p class="text-center">Here is No Sent Email</p>
                                                    </div>
                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                            
                                            
                                            ?>
                                           
                        </div>
                    </div>
                </div>



            
            </div>
          


    
<?php
include 'footer.php';
}else{
	header('Location: login.php');
}


?>
