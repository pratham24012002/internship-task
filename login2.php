<?php
$email1=$_POST['email'];
$password1=$_POST['pswd'];
if($email1&&$password1)
{
	$connect=mysqli_connect('localhost','root','');
	mysqli_select_db($connect,'register');
	$query=mysqli_query($connect,"SELECT * FROM users WHERE email='$email1'");
	$numrows=mysqli_num_rows($query);
	//echo $numrows;
	if($numrows!=0)
	{
		while($row=mysqli_fetch_assoc($query))
		{
			$dbemail=$row['email'];
			$dbpassword=$row['password'];
		}
		if($email1==$dbemail && $password1==$dbpassword)
		{
			echo "youre logged in <br>";
			echo "username:".$email1."<br>";
			echo "password:".$password1;
		}
		else
			echo"incorrect password";
	}
	else
		echo "user doesnt exist";
}
else
	echo "not enterd";
?>