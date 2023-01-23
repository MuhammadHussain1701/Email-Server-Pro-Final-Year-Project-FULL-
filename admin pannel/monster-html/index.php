<?php
session_start();
// var_dump($_SESSION['login_user']);
//             die();
if(isset($_SESSION['login_user'])){
            
            include 'header.php';    
            include 'menubar.php';
        ?>
        
        <div class="page-wrapper">
           
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">Dashboard</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                     <div class="col-md-6 col-4 align-self-center">
                      

                        <div class="text-end upgrade-btn">
                            <a href="#"  type="button"  data-toggle="modal" data-target="#myModal"
                            class="btn text-white mt-4" style="background-color: #0184C1;" target="_blank">
                            <i class="far fa-comment-alt mr-3"></i>
                        Compose Email
                        </a>
                        </div>
                    </div>
                   
                </div>
            </div>
            
            
            
            
            
                     <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Compose Email</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <form method="POST" action="../backend/emailsent.php"  enctype="multipart/form-data">
                    <div class="modal-body">
                                                            <div class="form-group">
                                                                <?php
                                                                include '../backend/config.php';
                                                                $id = $_SESSION['login_user'];

                                                                    ?>
                                                                    <label for="email" class="form-label">From:</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fromemail" Value="<?= $id?>" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                    <label for="email" class="form-label">To:</label>
                                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="toemail">
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                    <label for="email" class="form-label">Subject:</label>
                                                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="subject">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="comment">Message:</label>
                                                                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                    
                                                            </div>
                                                            <!-- <div class="form-group">-->
                                                                
                                                            <!--        <label for="email" class="form-label">Attachment:</label>-->
                                                            <!--        <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="choosefile">-->
                                                            <!--</div>-->
                                                            <div class="form-group">
                                                                
                                                                    <label for="email" class="form-label">Attachment:</label>
                                                                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="choosefile" onchange="Filevalidation()">
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                    <label for="email" class="form-label">Signature:</label>
                                                                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="choosefile1">
                                                            </div>
                                            

                            </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn"  style="background-color: #0184C1;color: white;" >Send</button>
                </form>
                    </div>

                    </div>
                </div>
                </div>
       
           
            <div class="container-fluid">
               
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Email</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-success"></i>
                                    <?php
                                    
                                      include '../backend/config.php';
                                      $id = $_SESSION['login_user'];
                                      $sql = "SELECT * FROM `email` WHERE `From_Email`='$id'";
                                      $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                              while($row = $result->fetch_assoc()) {
                                                $count = $count + 1;
                                                
                                              }
                                              
                                              echo $count;
                                            } else {
                                              echo "0";
                                            }
                                            
                                      
                                        
                                        
                                        
                                        
                                        
                                        
                                        ?>
</h2>
                                    <span class="text-muted">SENT</span>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Email</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-down text-info"></i><?php
                                    
                                      include '../backend/config.php';
                                      $id = $_SESSION['login_user'];
                                      $sql = "SELECT * FROM `email` WHERE `To_Email`='$id'";
                                      $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            
                                              $count = 0;
                                              while($row = $result->fetch_assoc()) {
                                                $count = $count + 1;
                                                
                                              }
                                              
                                              echo $count;
                                            } else {
                                              echo "0";
                                            }
                                            
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        ?></h2>
                                    <span class="text-muted">RECEIVED</span>
                                </div>
                               
                            
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Email</h4>
                                <div class="text-end">
                                    <h2 class="font-light mb-0"><i class="ti-arrow-up text-warning"></i> <?php
                                    
                                      include '../backend/config.php';
                                      $id = $_SESSION['login_user'];
                                      $sql = "SELECT * FROM `email` WHERE `Status`='pending'";
                                      $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            $count = 0;
                                              while($row = $result->fetch_assoc()) {
                                                $count = $count + 1;
                                                
                                              }
                                              
                                              echo $count;
                                            } else {
                                              echo "0";
                                            }
                                            
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        ?></h2>
                                    <span class="text-muted">PENDING</span>
                                </div>
                               
                            </div>
                        </div>
                    </div>


                    <?php 
                     $id = $_SESSION['login_user'];

                     $sql = "SELECT * FROM `signup` WHERE `Email`='$id'";

                     $result = $conn->query($sql);
                     
                       if ($result->num_rows > 0) {
                             $row = $result->fetch_assoc();

                                if($row['status']=='admin'){
                                    ?>
                                         <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h4 class="card-title">RECENTLY JOIN</h4>
                                                                <div class="table-responsive">
                                                                    <table class="table user-table no-wrap">
                                                                    <?php
                                                                                include '../backend/config.php';
                                                                                
                                                                                $sql = "SELECT * FROM signup ORDER BY registration_id DESC LIMIT 5";
                                                                                $result = $conn->query($sql);

                                                                                if ($result->num_rows > 0) {?>
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="border-top-0">#</th>
                                                                                <th class="border-top-0">Status</th>
                                                                                <th class="border-top-0">Full Name</th>
                                                                                <th class="border-top-0">Email</th>
                                                                                <th class="border-top-0">Contact</th>
                                                                                <th class="border-top-0">Gender</th>
                                                                                <th class="border-top-0">Time & Date</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                    <?php
                                                                                    $counter = 0;
                                                                                while($row = $result->fetch_assoc()) {
                                                                                    $counter = $counter + 1;
                                                                                ?>
                                                                                
                                                                                <tr>
                                                                                <td><?= $counter?></td>
                                                                                <td><?php 
                                                                                
                                                                                
                                                                                if($row['user_status']=='online'){
                                                                                        ?>
                                                                                        <img src="../assets/images-modified.png" alt="Online" class="img-thumbnail" style="background-color: #fff; max-width:25px;border:none;">
                                                                                        
                                                                                        <?php
                                                                                }else{
                                                                                    ?>
                                                                                    <img src="../assets/ofline-modified.png" alt="Online" class="img-thumbnail" style="background-color: #fff; max-width:25px;border:none;">
                                                                                    
                                                                                    <?php
                                                                                }
                                                                                
                                                                                
                                                                                ?></td>
                                                                                <td><?= $row['Full_Name']?></td>
                                                                                <td><?= $row['Email']?></td>
                                                                                <td><?= $row['Contact']?></td>
                                                                                <td><?= $row['Gender']?></td>
                                                                                <td><?php $DateTime = explode(" ",$row['joining Date Time']);
                                                                                $Date = $DateTime[0];
                                                                                $explitdate = explode("-",$Date);
                                                                                $AccurateDate = $explitdate[2]."-".$explitdate[1]."-".$explitdate[0];
                                                                                $Time = $DateTime[1];
                                                                                $explittime = explode(":",$Time);
                                                                                $AccurateTime = $explittime[1].":".$explittime[0];
                                                                                echo $AccurateTime." ".$AccurateDate;
                                                                                
                                                                                ?></td>
                                                                            
                                                                            
                                                                                
                                                                                
                                                                            </tr>
                                                                                
                                                                                <?php
                                                                                }
                                                                                } else {?>
                                                                                <tr>
                                                                                <div class="alert alert-info" role="alert">
                                                                                <p class="text-center">Here is No Pending Emails</p>
                                                                                    </div>
                                                                                </tr>
                                                                                <?php
                                                                                }
                                                                                $conn->close();
                                                                            
                                                                            
                                                                            ?>
                                                                        
                                                                        
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                                    
                                    
                                    
                                    <?php
                                    
                                }else{

                                    ?>
                                    
                                    <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">RECENTLY EMAILS</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                    <?php
                                                include '../backend/config.php';
                                                $Email = $_SESSION['login_user'];
                                                $sql ="SELECT * FROM `email` WHERE `To_Email`='4everliving786@gmail.com' AND `status`='sent' ORDER BY id DESC LIMIT 5";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {?>
                                        <thead>
                                            <tr>
                                            <th class="border-top-0">#</th>
                                                <th class="border-top-0">Status</th>
                                                <th class="border-top-0">From</th>
                                                <th class="border-top-0">To</th>
                                                <th class="border-top-0">Subject</th>
                                                <th class="border-top-0">Message</th>
                                                <th class="border-top-0">Attachment</th>
                                                <th class="border-top-0">Time & Date </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                       
                                       <?php 
                                                    $counter = 0;
                                                while($row = $result->fetch_assoc()) {
                                                    $counter = $counter + 1;

                                                    $string = $row['Message'];
                                                    $swearWords = array("asshole","buttface","asslicker","jerk","fuck");
                                                    $replacer = array("a**hole","b**tface","a**li***r","j**k","f**k");
                                                    $filter = str_ireplace($swearWords,$replacer, $string);
    
                                                    if($string==$filter){
                                                            ?>
                                                        <tr>
                                                        <td><?= $counter?></td>
                                                        <td><?php 
                                                        $email = $row['To_Email'];
                                                         $sql1 ="SELECT * FROM `signup` WHERE `Email`='$email'";
                                                        
                                                     
                                                         $result1 = $conn->query($sql1);
         
                                                         if ($result1->num_rows > 0) {
                                                         
                                                            $row1 = $result1->fetch_assoc();
                                                                                              
                                                        if($row1['user_status']=='online'){
                                                                ?>
                                                                <img src="../assets/images-modified.png" alt="Online" class="img-thumbnail" style="background-color: #fff; max-width:25px;border:none;">
                                                                
                                                                <?php
                                                        }else{
                                                            ?>
                                                            <img src="../assets/ofline-modified.png" alt="Online" class="img-thumbnail" style="background-color: #fff; max-width:25px;border:none;">
                                                            
                                                            <?php
                                                        }
                                                        
                                                    }
                                                        ?></td>
                                                        <td><?= $row['From_Email']?></td>
                                                        <td><?= $row['To_Email']?></td>
                                                        <td><?= $row['Subject']?></td>
                                                        <td>
                                                        
                                                        <div class="upgrade-btn">
                                    <a href="../backend/updatemailstatus.php?id=<?= $row['id']?>"  type="button"  
                                    class="btn text-black" style="background-color: white; border:none; padding: unset;" target="_blank">
                                    <?php $explite = explode(" ",$row['Message']);
                                            echo $explite[0]." ".$explite[1]." ....";
                                    ?>
                                        </a>
                                        </div></td>
                                                       
                                                       
                                                        <td> <a href="../backend/image/<?= $row['Attachment_Path']?>"
                                                            class="btn text-white" style="background-color: #00BDDA;" target="_blank">
                                                            <i class="fas fa-download mx-3"></i>
                                                            </a></td>
        
                                                            <td> <a href="../backend/dellemail.php?id=<?= $row['id']?>"
                                                            class="btn btn-danger text-white" target="_blank">
                                                            <i class="fas fa-trash mx-3"></i>
                                                            </a></td></tr>
                                                        <?php                                                       
                                                    }
                                                   ?>
                                                   
                                                  
                                                   
                                                   <?php
                                                }
                                                } else {?>
                                                <tr>
                                                   <div class="alert alert-info" role="alert">
                                                   <p class="text-center">Here is No Email Recieved Yet</p>
                                                    </div>
                                                </tr>
                                                <?php
                                                }
                                                $conn->close();
                                            
                                            
                                            ?>
                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                                    
                                    
                                    <?php

                                }   
                       }
                    
                    ?>


                   

                  
                    <!-- Column -->
                </div>
            
          
            </div>
            
            <footer class="footer text-center">
            © 2022 All Rights reserved copyright
            </footer>
            
        </div>
       
    </div>
    <script>
    Filevalidation = () => {
        const fi = document.getElementById('exampleInputEmail1');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 100000) {
                    alert(
                      "File too Big, please select a file less than 100mb");
                }else if (file < 2048) {
                    alert(
                      "File too small, please select a file greater than 2mb");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
    }
 </script>
    
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.js"></script>
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>    
    
    
<?php
}else{
	header('Location: login.php');
}


?>


