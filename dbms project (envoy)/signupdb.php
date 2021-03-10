<?php

$servername="localhost";
$user_name="root";
$password="";


$conn=mysqli_connect($servername,$user_name,$password);

if(!$conn)
{
	die("Not Connected");
}

$email=$_POST['email'];
$user=$_POST['user_name'];
$password=$_POST['password'];
$cnf_password=$_POST['cnf_password'];

mysqli_select_db($conn,'messenger');

if(strcmp($password,$cnf_password)==0)
{
	$sql="SELECT email FROM signupdb WHERE email='$email'";
	$return=mysqli_query($conn,$sql);
	if(!$return)
	{
		die("Error".header('location: SignUp.php'));
	}
	else
	{
		$query="INSERT INTO signupdb (email,user,password) VALUES('$email','$user','$password')";
	}
}
else
{
	die("password didnot match.");
}

$retval=mysqli_query($conn,$query);

if(!$retval)
{
	die("Error in returning value.");
}
else
{	
	$_SESSION['user_name']=$user;
	echo $user;
	echo header('location: frontpage.php');
}


?>