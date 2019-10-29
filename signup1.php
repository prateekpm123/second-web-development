<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>

	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="signup1.css">
</head>
<body>
	<!-- Navigation bar -->

	<div class="container">
		<div class="row"></div>		
			<div class="col-md-4 offset-md-4 form-div">

				<form action="registration.php" method="post">
					<h3 class="text-center">Register</h3>
					
					<!-- <div class="alert alert-danger">
						<li>Username required</li>
					</div> -->

					<div class="form-group">
						<label>Username</label>
						  <input type="text" name="user" class="form-control form-control lg">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						  <input type="password" name="password" class="form-control form-control lg">
					</div>
					<button type="submit" class="btn-btn-primary">Register</button>
				
						
					<p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
				</form>

			</div>
	</div>
	<script type="text/javascript">
		
		function dropdownMenu()
		{
			var x = document.getElementById("dropdownclick");

			if(x.className === "topnav") 
			{
				x.className += " responsive";
				// change topnav to topnav responsive which trigram is clicked
			}
			else 
			{
				x.className = "topnav";
			}
		}
		
		

	</script>
</body>
</html>