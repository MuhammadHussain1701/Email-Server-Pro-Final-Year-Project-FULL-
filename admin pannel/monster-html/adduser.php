<?php
session_start();
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

                    <?php
                        include '../backend/config.php';
                        if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM `signup` WHERE `registration_id`='$id'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        $row = mysqli_fetch_assoc($result);

                        
                       
                    
                    ?>
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body profile-card">
                                        
                                        <center class="mt-4"> <img src="../backend/image/<?= $row['profile_name']?>"
                                                class="rounded-circle" width="150" />
                                            <h4 class="card-title mt-2"><?= $row['Full_Name']?></h4>
                                            <h6 class="card-subtitle"><?= $row['Email']?></h6>
                                            <div class="row justify-content-center">
                                             
                                        </center>
                                    </div>
                                </div>
                            </div>    
                            
                        </div>
                        
                      
                                    
                        
                        
                    </div>
                    
                      
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="POST" action="../backend/updateuser.php" enctype="multipart/form-data">
                                <div class="form-group">
                                        <div class="col-md-12">
                                                <?php
                                                    if(isset($_SESSION['Data'])){
                                                        ?>
                                                            <div class="alert alert-success">
                                                            <strong><?= $_SESSION['Data']?></strong> 
                                                            </div>
                                                        <?php
                                                        unset( $_SESSION['Data']);
                                                    }else{

                                                    }
                                                ?>
                                        </div>
                                    </div>
                                    
                                    
                                 
                                
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">User Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fullname" value="<?= $row['Full_Name']?>"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                              
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" value="<?= $row['Email']?>"
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Phone Number</label>
                                        <div class="col-md-12">
                                            <input type="number" name="pnumber" value="<?= $row['Contact']?>"
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email"  class="col-md-12">Gender</label>
                                        <div class="col-md-12">
                                            <input type="text" name="gender" value="<?= $row['Gender']?>"
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                  
					                 <div class="form-group">
                                        <label class="col-md-12 mb-0">Update Profile</label>
                                        <div class="col-md-12">
                                           	<input type="file"  class="form-control ps-0 form-control-line" name="choosefile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      
                                        <div class="col-md-12">
                                            <input type="hidden" name="choosefile1" value="<?= $row['profile_name']?>"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <input type="text" name="password" value="<?= $row['password']?>"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" value="<?= $row['registration_id']?>"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                 
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button class="btn mx-auto mx-md-0 text-white" style="background-color: #00BDDA;">Update
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                            <?php 
                                    
                                } else {
                                    echo "0 results";
                                    }

                                }else{
                                ?>
                                
                                <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="../assets/images/users/5.jpg"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title mt-2">Name Here</h4>
                                    <h6 class="card-subtitle">Email Here</h6>
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <i class="icon-people" aria-hidden="true"></i>
                                                <span class="font-normal">254</span>
                                            </a></div>
                                        <div class="col-4">
                                            <a href="javascript:void(0)" class="link">
                                                <i class="icon-picture" aria-hidden="true"></i>
                                                <span class="font-normal">54</span>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" method="POST" action="../backend/signup.php" enctype="multipart/form-data">
                                <div class="form-group">
                                        <div class="col-md-12">
                                                <?php
                                                    if(isset($_SESSION['Data'])){
                                                        ?>
                                                            <div class="alert alert-success">
                                                            <strong><?= $_SESSION['Data']?></strong> 
                                                            </div>
                                                        <?php
                                                    }else{

                                                    }
                                                ?>
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="fullname" 
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">CNIC</label>
                                        <div class="col-md-12">
                                            <input type="text" name="cnic" 
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" 
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Phone Number</label>
                                        <div class="col-md-12">
                                            <input type="number" name="pnumber" 
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email"  class="col-md-12">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" name="address"
                                                class="form-control ps-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label for="exampleFormControlFile1"  class="col-md-12">Profile</label>
                                        <div class="col-md-12">
                                            <input type="file" name="choosefile" id="fileToUpload">
                                        </div>
                                    </div>
                                   

                                    <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="exampleFormControlSelect1">Gender</label>
                                        <select class="form-control ps-0 form-control-line" id="exampleFormControlSelect1">
                                            <option>Male</option>
                                            <option>Fe-Male</option>
                                            <option>Other</option>
                                        </select>
                                                </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" value="<?= $row['registration_id']?>"
                                                class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                 
                                    <div class="form-group">
                                        <div class="col-sm-12 d-flex">
                                            <button class="btn btn-success mx-auto mx-md-0 text-white">Add
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                                
                                
                                
                                
                                <?php
                            }
                            
                            ?>
                </div>
            </div>
          

<?php

include 'footer.php';
}else{
	header('Location: login.php');
}


?>

