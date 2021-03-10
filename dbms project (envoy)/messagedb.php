<?php

$server="localhost";
$user="root";
$password="";

$conn=mysqli_connect($server,$user,$password);

if(!$conn)
{
 die (header('location: index.php'));
}

mysqli_select_db($conn,'messenger');

$user_name=$_SESSION['user_name'];
$message=$_POST['message'];


$query="INSERT INTO messagedb VALUES ('$user_name','$message',now())";

$retval=mysqli_query($conn,$query);

if(!$retval)
{
 die (header('location: index.php'));
}

?>