<?php

session_start();



?>
<!DOCTYPE html>
<html>
<head>
	<title>Email|Pro</title>

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
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body" style="height:auto;">
			    
			    <div class="row mb-4">
			        
			        
			        <?php
			        
			        
			            if(isset($_SESSION['Data'])){
			                
			                ?>
			                
			                
			                         <div class="alert alert-success">
                                      <strong>Success!</strong>
                                    </div>
			        
			                
			                <?php
			                
			                unset($_SESSION['Data']);
			            }
			                ?>
			                
			              
			          <?php  if(isset($_SESSION['Error_login'])){
			                
			                ?>
			                
			                
			                         <div class="alert alert-danger">
                                      <strong><?= $_SESSION['Error_login']?></strong>
                                    </div>
			        
			                
			                <?php
			                
			                unset($_SESSION['Error_login']);
			            }
			                ?>
			                
			                
			           
			            
			      
			    </div>
			       
				<form method="POST" action="../backend/login.php">
				    
				    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Enter Email" name="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					
					<div class="form-group text-center">
						<input type="submit" value="Login" class="btn login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="verifyemail.php">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>

