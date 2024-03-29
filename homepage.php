<?php 

session_start();
if(!isset($_SESSION['username']))
{
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
	<!-- Navigation bar -->
	<nav>
		<ul class="topnav" id="dropdownclick">
			<li><a href="homepage.php">Home</a></li>
			<li><a href="courses.php">Courses</a></li>
			<li><a href="contactus.php">Contact us</a></li>
			<li class="topnav-right"><a href="login.php">Login in</a></li>
			<li class="topnav-right"><a href="signup1.php">Sign up</a></li>
			<li class="topnav-right"><a href="logout.php">Logout</a></li>
			<li class="dropdownicon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
		</ul>
	</nav>
	<!-- <h1>Welcome //<?php echo $_SESSION['username']; ?> </h1> -->
	<div class="container" id="section-1-gradient">
		<div class="row">
			<div class="col-6 " >
				<div class="leftside-col">
					<h1 class="large">Welcome <?php echo $_SESSION['username']; ?> to</h1>
					<h1 class="large">INFO ON CAREER</h1>
					<h1 class="large">FOR YOU</h1>
				</div>
				<form >
					<div class="leftside-col">
						<h2>Username</h2>
						<input class="inputbox" type="text" name="username" placeholder="username">
						<h2>Password</h2>
						<input class="inputbox" type="password" name="password" placeholder="password">
					</div>
				</form>
			</div>
			<div class="col-6">
				<div class = "rightside-col">
					<div class="videocontainer">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/sOpMrVnjYeY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<header> 
		<h1 class="section-to-header">Direction which will show you the right career path</h1>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="box">
					<div class="icon">
						<img src="icon.png">
					</div>
					<label>Path career finder</label>
					<p>
						"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore" 
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="box">
					<div class="icon">
						<img src="icon.png">
					</div>
					<label>Career of your choice</label>
					<p>
						"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore" 
					</p>
				</div>
			</div>
			<div class="col-4">
				<div class="box">
					<div class="icon">
						<img src="icon.png">
					</div>
					<label>One place for all</label>
					<p>
						"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore" 
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<button class="learnmore">Learn more</button>
			</div>
		</div>
	</div>	
	<footer class="footsy">
		<div class="row">
			<div class="col-3 mobilestack">
				<h1>Company</h1>
				<ul>
					<li>About</li>
					<li>Blogs</li>
					<li>Careers</li>
				</ul>
			</div>
			<div class="col-3 mobilestack">
				<h1>Company</h1>
				<ul>
					<li>About</li>
					<li>Blogs</li>
					<li>Careers</li>
				</ul>
			</div>
			<div class="col-3 mobilestack">
				<h1>Company</h1>
				<ul>
					<li>About</li>
					<li>Blogs</li>
					<li>Careers</li>
				</ul>
			</div>	
			<div class="col-3 mobilestack">
				<h1>Company</h1>
				<ul>
					<li>About</li>
					<li>Blogs</li>
					<li>Careers</li>
				</ul>
			</div>				
		</div>

	</footer>












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