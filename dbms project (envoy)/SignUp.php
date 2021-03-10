<!DOCTYPE html>

<html>

<style>

body
{
	margin:0;
	font-family: sans-serif;
}

.navigation
{
	background-color: #4286f4;
	overflow: hidden;
}

.navigation a
{
	text-align: center;
	float:left;
	color:black;
	text-decoration: none;
	font-size:20px;
	padding: 10px;
}

.navigation a:hover
{
	background-color:white;
	opacity:0.9;
}

.navigation a.active
{
	background-color:gray;
	opacity:0.9;
}

</style>


<div class="navigation">
	<a class="active" href="SignUp.php">Sign Up</a>
	<a href="login.php">Log In</a>
</div>



<style>

input[type=text], input[type=password]
{
 	opacity: 0.5;
    width: 100%;
    padding: 1%;
    background-color: #4286f4;
    border:none;
}

input[type=text]:focus, input[type=password]:focus
{
	opacity: 0.5;
	background-color: white;
}

.container
{
	margin-top: 5%;
	margin-left: 20%;
	margin-right: 20%;

	overflow: hidden;
}

.button
{
	padding: 1%;
	border-radius: 5px;
	border-color: black;
	width: 20%;
	border-width:1px;
	font-size: 100%;
	background-color: transparent;
}

.clear::after
{
	content:"";
	clear:both;
}

</style>



<form action="signupdb.php" method="POST">

<div class="container">

<label for="user_name"><font color="black">User</font></label>
<input type="text" name="user_name" placeholder="Enter User Name" required/><br>

<label for="email"><font color="black">Email</font></label>
<input type="text" name="email" placeholder="Enter your email" required/><br>

<label for="pass"><font color="black">Password</font></label>
<input type="password" name="password" placeholder="Enter Password" required/><br>

<label for="cnf_password"><font color="black">Confirm Password</font></label>
<input type="password" name="cnf_password" placeholder="Confirm password" required/><br>

<p style="color:black;">By creating an account you accept our <a style="color: red" href="t&c.html">Terms & Conditions</a></p>

<div class="clear">
<button type="button" class="button">Cancel</button>
<button type="submit" class="button">Sign Up</button>
</div>

</div>

</form>


<style>

body
{
	background-color: #e0e2e5;
	background-size:100% 300%;
	background-position: fixed;
	background-position: center;
}

</style>



</html>