<?php

$messageid=$_GET['ID'];

$server="localhost";
$user="root";
$password="";

$conn=mysqli_connect($server,$user,$password);

$_SESSION['to_user']=$messageid;

header('location: index.php');

?>