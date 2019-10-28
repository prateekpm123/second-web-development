<?php

 // ####### FOR DISPLAYING ERROR #########
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'registration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from users where username = '$name'";
echo $s;
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Username already taken";
}
else 
{
	$reg = "insert into users(username, password) values ('$name', '$pass')";
	echo $reg;
	mysqli_query($con, $reg);
	echo "Registration Successful";
}

?>