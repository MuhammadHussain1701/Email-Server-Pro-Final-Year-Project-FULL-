
<!DOCTYPE html>
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
				<h3>Register!</h3>
				
			</div>
			<div class="card-body">
			<form method="POST" action="../backend/signup.php"  enctype="multipart/form-data">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
						
					</div>
					    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Email" name="email" required>
						<div class="input-group-prepend" >
							<span class="input-group-text" style="width: 100px; border-radius: 3px"> @esp.com</span>
						</div>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-tty"></i></span>
						</div>
						<input type="number" class="form-control" placeholder="Contact" name="contact">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-camera-retro"></i></span>
						</div>
						<input type="file" class="form-control" name="choosefile" required>
						
					</div>
					<div class="input-group form-group">
					<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-users my-1"></i></span>
						</div>
						<div class="form-check form-check-inline ml-2" style="form-check-radio-border-radius: 40px" required>
							<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
							<label class="form-check-label" for="inlineRadio1">Male</label>
							</div>
							<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
							<label class="form-check-label" for="inlineRadio2">Fe-male</label>
							</div>
							<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Other">
							<label class="form-check-label" for="inlineRadio1">Other</label>
							</div>
					</div>
					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Password" name="password" required>
					</div>
					<div class="form-group">
						<input type="submit" value="Register" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Have an account?<a href="login.php">Sign In</a>
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

