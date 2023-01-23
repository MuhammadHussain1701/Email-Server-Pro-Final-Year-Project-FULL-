<?php


 session_start();

?>
<html>
<head>
	<title>Login Page</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="loginpage.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Add New</h3>
				
			</div>
			<div class="card-body mt-4">
				<form class="form-horizontal form-material mx-2" method="POST" action="../backend/updatepassword.php">
					
					
					
					
					  <?php  
					        
					        if(isset($_SESSION['Password_status'])){
					        
					            ?>
					            <div class="form-group">
					            <div class="alert alert-primary">
                                  <strong><?= $_SESSION['Password_status']?></strong>
                                </div>
					            </div>
					            <?php 
					            
					            unset($_SESSION['Password_status']); 
					            }
					            
					            ?>
					            
					            
					            
					            
					            	  <?php  
					        
					        if(isset($_SESSION['Password_status_No'])){
					        
					            ?>
					            <div class="form-group">
					            <div class="alert alert-danger">
                                  <strong><?= $_SESSION['Password_status_No']?></strong>
                                </div>
					            </div>
					            <?php 
					            
					            unset($_SESSION['Password_status_No']); 
					            }
					            
					            ?>
					            
					            
		<div class="input-group form-group">
					
						<input type="hidden" class="form-control" placeholder="" name="email" value="<?= $_GET['email']?>">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="New password" name="password">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend"> 
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Confirm password" name="confirmpassword">
					</div>
					
					<div class="form-group text-center">
						<input type="submit" value="Change" class="btn login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign In</a>
				</div>
				
			</div>
		</div>
	</div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

