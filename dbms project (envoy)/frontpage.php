<!DOCTYPE html>
<html>
<?php
 if(!isset($_SESSION['user_name']))
{
 echo header('location: login.php');
} 
?>






<style>

body
{
	margin-top: 0;
}

.nav
{
	border-radius: 5px;
	background:linear-gradient(180deg,#4286f4,#4286f4);
	opacity:0.9;
	overflow:hidden;
	margin-bottom: 20px;

}

.nav1
{
	background-color: transparent;
	opacity:0.9;
	overflow:hidden;
	margin-bottom: 20px;

}
.nava
{
	text-align: center;
	font-size: 20px;
	color:white;
	padding:5px;
}
.nava1
{
	text-align: center;
	font-size: 20px;
	color:black;
	padding:5px;
}
</style>


<style>

body
{
	margin-top: 0;
}

button
{
	border-radius: 5px;
	margin-top: 20px;
	background-color: transparent;
	opacity:0.9;
	overflow:hidden;
	width:60%;
	margin-left: 20%;
	text-align: center;
	border-style: solid;
	border-color: black;
	font-size: 20px;
	color: black;
	padding:5px;
	border-width: 1px;
	letter-spacing: 1px;

}

.logout
{
	opacity:0.9;
	border-radius: 10px;
}
.logout a
{
	text-align: left;
	color:black;
	opacity:0.9;
	text-decoration: none;
	font-size: 20px;
	color:white;
	margin-left: 5px;
}

</style>


<?php
{
	if(isset($_SESSION['user_name']))
 	{
 		echo '<div class="nav"><div class="nava">'."WELCOME ".$_SESSION["user_name"];
 		echo '<div class="logout">'.'<span style="margin-left:88%;">'.'<a href="logout.php">'."Log Out".'</a>'.'</span>'.'</div>'.'</div>'.'</div>';
        echo '<div class="nav1"><div class="nava1">'."YOUR CONTACTS".'</div>'.'</div>';
	}
}

$server="localhost";
$user="root";
$password="";

$conn=mysqli_connect($server,$user,$password);

if(!$conn)
{
	echo header('location: login.php');
}

$query="SELECT user FROM signupdb";

mysqli_select_db($conn,'messenger');

$retval=mysqli_query($conn,$query);



while($fetch=mysqli_fetch_assoc($retval))
{
	if(strcmp($fetch["user"],$_SESSION['user_name'])!==0)
	{
		echo '<div class="button">';
		echo "<a href='message_assign.php ?ID=".$fetch["user"]."'>";
		echo "<button type='submit' name='".$fetch["user"]."'>".$fetch["user"]."</button>";
		echo "</a>";
		echo '</div>';
	}
}



/*
while($fetch=mysqli_fetch_assoc($retval))
{
	echo '<div class="contact"> <div class="contactname">';
	echo "<a href='index1.php'>".$fetch["user"]."</a>";
	$_SESSION['USER']=$fetch["user"];
	echo '</div>'.'</div>';
} */

?>

<style>

body
{
	background-color: #e0e2e5;
}

</style>




</html>