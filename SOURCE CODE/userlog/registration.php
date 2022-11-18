<?php session_start(); ?>
<?php include('../dbcon.php'); ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="userstyles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>

<body>

	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/ico.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="registered.php" method="post">
                    <div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="donorname" class="form-control input_user" value="" placeholder="Donor name" required>
						</div>
						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="" placeholder="Username" required>
						</div>
						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="Password" required>
						</div>
                        <div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="confirmpassword" class="form-control input_pass" value="" placeholder="Confirm Password" required>
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="userregister" style="border-radius: 0%" class="btn login_btn">Register</button>
				   </div>
					</form>
				</div>
				
				<?php
	if (isset($_POST['userregister']))
		{
			$username = mysqli_real_escape_string($con, $_POST['username']);
			$donorname = mysqli_real_escape_string($con, $_POST['donorname']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			
			$query 		= mysqli_query($con, "SELECT * FROM users WHERE  donorname='$donorname' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					echo '
								<div class="alert alert-danger alert-dismissible">
                                        Donor name and User name is already registered.
                                    </div> ';
					
				}
		}
  ?>
				
				
		
				<div class="mt-4">
					<!--<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#"  class="ml-2" style="text-decoration:none">Sign Up</a>
					</div> -->
					<div class="d-flex justify-content-center links">
						<a href="./userlogin.php" style="text-decoration:none; color: white">Back to User Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>



</html>

