<!DOCTYPE html>

<html>

<style>

body
{
	margin:0;
	font-family: Arial, Helvetica, sans-serif;;
}

.navigation
{
	background-color: #4286f4;
	opacity: 0.9;
	overflow: hidden;
}

.navigation a
{
	text-align: center;
	float: left;
	font-size:20px;
	padding: 10px;
	color: black ;
	text-decoration :none ;
	display: block;
}

.navigation a:hover
{
	background-color: gray;
	opacity:0.9;
}

.navigation a.active
{
	background-color: white;
	opacity: 0.9;
}

</style>

<div class="navigation">
	<a href="SignUp.php">Sign Up</a>
	<a  class="active" href="login.php">Log In</a>
</div>


<style>

input[type=text], input[type=password]
{
	opacity: 0.5;
	background-color:  #4286f4;
	width:100%;
	border:none;
	padding:2%;
}

input[type=text]:hover, input[type=password]:hover
{
	opacity:0.5;
	background-color: white;
}

.container
{
	margin-left: 30%;
	margin-right: 30%;
	margin-top: 5%;
}

.button
{
	opacity:0.9;
	color:black;
	padding: 10px;
	border:none;
	overflow:hidden;
	background-color: transparent;
	font-size: 20px;
	width: 49%;
	border-radius: 5px;
	border-style: solid;
	border color: black;
	border-width: 1px;
}

.clear::after
{
	content:"";
	clear: both;
	display: table;
}

</style>

<form action="logindb.php" method="POST">
<div class="container">

<label for="user_name"> <font color="black">User Name</font></label>
<input type="text" placeholder="Enter User Name" name="user_name" required/>

<label for="password"> <font color="black">Password</font></label>
<input type="password" placeholder="Enter password" name="password" required/>

<p></p>

<div class="clear">
<button type="button" class="button">Cancel</button>
<button type="submit" class="button">Sign In</button>
</div>
</div>

</form>

<style>
body
{
	background-color: #e0e2e5;
	background-size:100% ;
}
</style>


</html>