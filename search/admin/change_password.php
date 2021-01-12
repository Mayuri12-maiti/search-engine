<html>
<head>
	<title>Change Password</title>
	<style>
	body{
	margin: 10;
	padding: 0;
	background-image:url("bgimg.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	font-family: sans-serif;
}
.loginbox{
	width: auto;
	height: auto;
	background:black;
	opacity:0.9;
	color: green;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 70px;
	border-radius:10px;
  box-shadow:-2px 6px 8px 4px #D7DBDD;
}
.logo1{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
	
}
h1{
margin: 0;
padding: 0;
text-align: center;
font-size: 22px;
font-family: verdana;
}
.loginbox p{
	margin: 0;
	padding: 0;
	font-weight: bold;
}
.loginbox input{
	width: 100%;
	margin-bottom: 30px;
}
.loginbox input[type="text"], input[type="password"]{
	border: none;
	border-bottom: 1px solid white;
	background: transparent;
	outline: none;
	height: 40px;
	color:white;
	font-size: 16px;
}
.loginbox input[type="submit"]{
	border: none;
	outline: none;
	height: 40px;
	background: #2E86C1;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	cursor: pointer;
	background:#A569BD;
	color: #000;
}
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<body>
<div class="loginbox">
	<img src="loginlogo.png" class="logo1">
     <h1>Change Password</h1>
     <form action="" method="POST">
     	<p>Email Id</p>
     	<input type="text" name="emailid" placeholder="Enter Email id" title="Enter user_name" required="please enter Username" autocomplete="off">
     	<p>New Password</p>
     	<input type="password" name="password" placeholder="Enter New Password" title="Enter password" required="please enter Password">
     	<input type="submit" name="submit1" value="sign in">
     </form>
</div>

<?php
include("connection.php");
error_reporting(0);
if($_POST['submit1'])
{
	$emailid=$_POST['emailid'];
	$password=$_POST['password'];

	$query = "UPDATE login_admin SET password='$password' WHERE email_id='$emailid'";

	$data = mysqli_query($conn,$query);

	if($data)
	{
		echo "<script>alert('Password Changed')</script>";
		/*header("Refresh:0; url=http://localhost/search/admin/login.php");*/
	}
	else
	{
		echo "Failed to Change password!";
	}
}
?>

</body>
</html>