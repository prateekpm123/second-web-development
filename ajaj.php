<?php
include('database.php');
$sql="select id,name from student order by name asc";
$res=mysqli_query($con,$sql);
?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Contact Professional Trainers Directly</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  />
	<link rel="stylesheet" href="style.css" />
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!----------Header------------->

    <section id="nav-bar">
    	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src="Images/logo2.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.html">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="member.html">Membership</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ajaj.php">Trainers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.html">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
    </section>

	<br /><br />
	<div class="container">
		<h2 align="center">Contact Professional Trainers Directly</h2>
		<div class="row">
			<div class="col-md-12">
				<br />
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<select name="student_list" id="student_list" class="form-control" onchange="getData(this.options[this.selectedIndex].value)">
							<option value="">Select Trainer</option>
							<?php while($row=mysqli_fetch_assoc($res)){?>
							<option value="<?php echo $row['id']?>"><?php echo $row['name']?>
						</option>
						<?php } ?>
						</select>
					</div>
				</div>
				<br />
				<div class="table-responsive" id="user_details" style="display:none">
					<table class="table table-bordered">
						<tr>
							<td width="10%" align="right"><b>Name</b></td>
							<td width="90%"><span id="user_name"></span></td>
						</tr>
						<tr>
							<td width="10%" align="right"><b>Department</b></td>
							<td width="90%"><span id="user_city"></span></td>
						</tr>
						<tr>
							<td width="10%" align="right"><b>Email</b></td>
							<td width="90%"><span id="user_email"></span></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script>
		function getData(id){
			if(id==''){
				jQuery('#user_details').hide();
			}else{
			jQuery.ajax({
				url:'getData.php',
				type:'post',
				data:'id='+id,
				success:function(result){
					var json_data=jQuery.parseJSON(result);
					jQuery('#user_details').show();
					jQuery('#user_name').html(json_data.name);
					jQuery('#user_city').html(json_data.city);
					jQuery('#user_email').html(json_data.email);
				}
			})
		}
		}
	</script>

	<!-------------Footer-------------->
<section id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <img src="Images/logo3.png" class="footer-logo">
              <p>Fitness Forever is a place where you can find your best exercise and help maintain fitness resulting in quality life.</p>
            </div>

            <div class="col-md-3">
            <h1>Features</h1>
            <p>Certified Trainers</p>
            <p>Free Consulatation</p>
            <p>Flexible Time</p>
            <p>30 Days Free Trial</p>
            </div>

            <div class="col-md-3">
            <h1>Quick Contact</h1>
            <p><i class="fa fa-phone-square"></i> 0123456789</p>
            <p><i class="fa fa-envelope"></i> contact@gmail.com</p>
            <p><i class="fa fa-home"></i> xyz road</p>
            <p><i class="city"></i> Mumbai, Maharashtra</p>
            </div>    
            
             <div class="col-md-3">
            <h1>Follow Us On</h1>
            <p><i class="fa fa-facebook-official"></i> Facebook</p>
            <p><i class="fa fa-youtube-play"></i> Youtube</p>
            <p><i class="fa fa-instagram"></i> Instagram</p>
            <p><i class="fa fa-twitter"></i> Twitter</p>
            </div> 
            </div>
            </div>   

      </section>
</body>


</html>								 