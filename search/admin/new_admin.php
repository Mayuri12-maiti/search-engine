<?php
session_start();
error_reporting();
$user=$_SESSION['user_name'];

if($user==true)
{

}
else
{
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>new admin</title>
<style>
body{
	margin: 0;
	padding:0;
	background-image:url(aaa.jpg);
	background-repeat:no-repeat;
	background-size:cover;
	background-attachment:fixed;
	background-position:center;
	height: 100%;
	left: 70%;

}
.loginbox{
	width: auto;
	height:78%;
	background:#D7DBDD;
	color:blue;
	top: 48%;
	left: 55%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 80px 80px;
	border-radius:5px;
	opacity:0.9;
}
.loginbox input{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color:black;
	font-size: 16px;
}

.loginbox input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background:blue;
	color: #fff;
	font-size: 18px;
	border-radius: 17px;
}
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background: #ffc107;
	color: #000;
}
</style>
</head>
<body>
	<form action="" method="post">
	<div class="loginbox">
		<h1 style="margin-top:1%; ">New admin</h1>
			<input type="text" name="name" id="button" placeholder="Enter your name" autocomplete="off" required="Please Enter Your Nmae"><br><br>
			<input type="email" name="email" id="button" placeholder="Enter your Email Id" autocomplete="off" required="Please Enter Your Email"><br><br>
			<input type="text" name="username" id="button" placeholder="Create a new username" autocomplete="off" required><br><br>
			<input type="password" name="password" id="button" placeholder="Create a new password" autocomplete="off" required><br><br>
			
			<input type="submit" name="btn" value="Submit" style="width:177px;height:auto;">
	</div>
<?php
if (isset($_POST["btn"]))
{
require("connection.php");
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['username'];
$d=$_POST['password'];
$e=$_POST['confirmpass'];
$rs=mysqli_query($conn,"INSERT INTO login_admin(name,email_id,user_name,password,confirm_password)VALUES ('".$a."','".$b."','".$c."','".$d."','".$e."')");
if ($rs)
	{
	echo "<script>alert('Registration successfull')</script>";
	header('location:login.php');
	}
else
	{
	echo "<script>alert('Registration Unsuccessfull')</script>";
	}
}
?>
</form>
</body>
</html>
