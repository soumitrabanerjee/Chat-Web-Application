<?php


$servername="localhost";
$username="root";
$password="";

//establishing connection

$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
{
	die("Error".mysqli_connect_error());
	header('location: login.php');
}

$user=$_POST['user_name'];
$pass=$_POST['password'];

$query="select * from signupdb where user=('$user') and password=('$pass')";

mysqli_select_db($conn,'messenger');

$retval=mysqli_query($conn,$query);

$value=mysqli_fetch_assoc($retval);

 if(!$retval)
 {
	die("Some technical fault occured.".mysqli_error($conn));
 } 

if(strcmp($value["user"],$user)!==0)
{
	echo (header('location: login.php')."user name and password didnot match.");

}

else
{
 $_SESSION['user_name']=$user;

 echo ($user.header('location: frontpage.php'));
}

?>