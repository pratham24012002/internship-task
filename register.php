<?php
//$button=$_POST['button'];
$username1=$_POST['txt'];
$email1=$_POST['email'];
$password1=$_POST['pswd'];

if(strlen($password1)>25||strlen($password1)<6 )
	echo "password  length must be between 6 to 25 <br> with special charavter '!@$&'";
else
{
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,'register');
	$query=mysqli_query($connect,"INSERT INTO users VALUE('','$username1','$email1','$password1')");
	die("you have been registerd sucessfully");
}

?>