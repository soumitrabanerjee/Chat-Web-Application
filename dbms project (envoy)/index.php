<!DOCTYPE html>
<html>
<title> ENVOY </title>



<style>

.nav
{
	background: linear-gradient(90deg,#4286f4,#e0e2e5);
	width:100%;
	text-align: center;
	color:black;
	margin-bottom: 2px;
	opacity:0.9;
	border-radius:10px;
	font-size: 20px;
}
.logout
{
	background:linear-gradient(90deg,#e0e2e5,#4286f4);
	width:100%;
	margin-bottom: 2px;
	opacity:0.9;
	border-radius: 10px;
}
.logout a
{
	text-align: left;
	opacity:0.9;
	text-decoration: none;
	font-size: 20px;
	color:#f22b32;
	margin-left: 5px;
}


</style>



<?php
if(!isset($_SESSION['user_name']))
{
	header('location: login.php');
}
else
{
 //echo '<div class="nav">'."From: ".$_SESSION['user_name'].'</div>';
 echo '<div class="nav">'."".$_SESSION['to_user'].'</div>';
 echo '<div class="logout">'.'<a href="frontpage.php">'."Back".'</a>';
 echo '<span style="margin-left:88%;">'.'<a href="logout.php">'."Log Out".'</a>'.'</span>'.'</div>';
}

?>

<style>

input[type=text]
{
	width:100%;
	padding:10px;
	color:white;
	background-color: black;
	border:none;
	border-radius:4px;
}

.button
{
	color: black;
	background-color: transparent;
	border-style: solid;
	border-color: black;
	border-width: 1px;
	padding:0.9%;
	width:80%;
	margin-left: 10%;
	border-radius: 5px;

}
.container
{
	margin-left:20%;
	margin-right:20%;
	margin-top:0;
	margin-bottom: 1%;

}

.clear::after
{
	content:"";
	clear:both;
}

</style>

<div class="back">

</div>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" enctype="multipart/form-data">

<div class="container">
<input type="text" name="message" placeholder="Type a message" required></input>
<p></p>
<div class="clear">
<button class="button" type="submit">Send</button>
</div>
</div>

</form>


<style>

body{
	background-color: #e0e2e5 ;
	margin-left:10%;
	margin-right:10%;

}

</style>


 <style>

.text{


  margin-left: 52%;
  border-bottom: solid;
  border-width: 1px;
  text-align: left;
  letter-spacing: 2px;
  line-height: 30px;
  opacity: 1;
  color: white;
  background-color: #ff8533;
  padding:0px;
  padding-left: 5px;
  overflow: auto;
  border-radius: 5px;
  font-size: 15px;
  border-left-style: solid;
  border-color:black;

}


.message_to{

 
  margin-right: 52%;
  border-bottom: solid;
  border-width: 1px;
  text-align: left;
  letter-spacing: 2px;
  line-height: 30px;
  opacity: 1;
  color: black;
  background-color: #33ccff;
  padding:0px;
  padding-left: 5px;
  overflow: auto;
  border-radius:5px;
  font-size: 15px;
  border-left-style: solid;

}

.message_time
{
	margin-left: 74%;
	position: static;
	font-size: 10px;
}


 </style>

<?php

$server="localhost";
$user="root";
$password="";

$messageassign=$_SESSION['to_user'];
$to_user=$_SESSION['to_user'];

$conn=mysqli_connect($server,$user,$password);

if(!$conn)
{
 die (header('location: index.php'));
}

mysqli_select_db($conn,'messenger');

$user_name=$_SESSION['user_name'];
if(isset($_POST['message']))
{
	$message=$_POST['message'];

	$query="INSERT INTO messagedb VALUES ('$user_name','$message',now(),'$to_user','id')";

$retval=mysqli_query($conn,$query);

header('location: index.php');

if(!$retval)
{
 die (header('location: index.php'));
}


else
{

	$query="SELECT * FROM messagedb where (user_name='$user_name' and to_user='$to_user' )or (user_name = '$to_user'and to_user='$user_name') ORDER BY message_time DESC";
    $retval=mysqli_query($conn,$query);

	while($value=mysqli_fetch_assoc($retval))
	{
		echo '<div class="text">'.$value["message"];
		echo '<div class="message_time">'.$value["message_time"].'<br>'.$value["user_name"];
		echo '</div>'.'</div>';
	}
}

}
else
{
	
	$query="SELECT * FROM messagedb where (user_name='$user_name' and to_user='$to_user') or (user_name = '$to_user' and to_user='$user_name') ORDER BY message_time DESC";
    $retval=mysqli_query($conn,$query);


	while($value=mysqli_fetch_assoc($retval))
	{
	
		if(strcmp($value["user_name"],$_SESSION['user_name'])==0)
		{
		echo '<div class="text">'.$value["message"];
		echo '<div class="message_time">'.$value["message_time"].'<br>'.$value["user_name"];
		echo '</div>'.'</div>';
		}
		else
		{
		echo '<div class="message_to">'.$value["message"];
		echo '<div class="message_time">'.$value["message_time"].'<br>'.$value["user_name"];
		echo '</div>'.'</div>';
		}
	}

}




?>


</html>