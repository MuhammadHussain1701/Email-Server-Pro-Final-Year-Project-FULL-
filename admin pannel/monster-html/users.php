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
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All USERS</h4>
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                    <?php
                                                include '../backend/config.php';
                                                
                                                $sql = "SELECT * FROM `signup`";
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





            </div>
          


    
<?php
include 'footer.php';
}else{
	header('Location: login.php');
}


?>
