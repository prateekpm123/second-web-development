<?php
session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from users where username = '$name' && password ='$pass'";

echo $s; //this line was written to solve the error

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['username'] = $name;
	header('location:homepage.php');
}
else 
{
	header('location:login.php');
}

?>