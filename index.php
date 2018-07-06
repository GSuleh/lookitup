<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Look It Up!</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="php" type="text/php" href="./loginvalidation.php">
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}
?>

<body>

	<header>
		<video autoplay loop class="video-background" muted plays-inline>
			<source src="Final_Zoom_In_1.mp4" type="video/mp4">
		</video>

	<div class="nav">
		<img src="lg.jpg" class="logo">

		<ul class="menu">
		<li><a href="#">LOCATION</a></li>
		<li><a href="#">CATEGORY</a></li>
		<li><a href="#login" id="mbtn">SIGN IN</a></li>
		<li><a href="#" id="mbtn2">SIGN UP</a></li>
		</ul>
	</div>
	<div class="ms">
		<h1>SO AMAZING IT'S ALMOST UNREAL!!</h1>
		<a href="about.php#contacts" class="btn btn1">Contact</a>
		<a href="#" class="btn btn1">Explore</a>
	</div>

		<div id="lg" class="login">
		<img src="avatar.png" class="avatar">
		<span class="close">&times;</span>
		<h1>Login</h1>
		<form method="POST" action="index.php">				
			<p>Email</p>
			<input type="text" name="email2" placeholder="Email">
			<p>Password</p>
			<input type="password" name="password2" placeholder="Enter password">
			<input type="submit" name="login" value="Login">
			<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
			<a href="#">Forgot password</a>
		</form>
	</div>

	<div id="sp" class="login">
		<img src="avatar.png" class="avatar">
		<span class="close2">&times;</span>
		<h1>Login</h1>
				
		<form method="POST" action="index.php">
			<p>First Name</p>
			<input type="text" name="fname" placeholder="firstname">
			<p>Second Name</p>
			<input type="text" name="lname" placeholder="Second name">
			<p>Email</p>
			<input type="text" name="email" placeholder="Email">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter password">
			<input type="submit" name="register" value="Sign Up">
			<a href="#">Forgot password</a>
		</form>
	</div>

	</header>
	<script src="main.js" type="text/javascript"></script>
</body>
</html> 
}
?>