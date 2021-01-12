<!DOCTYPE html>
<html>
<link rel="icon" href="chat_logo1.png" sizes="27x27">
<head>
	<title>Webchat</title>
	<link rel="stylesheet" type="text/css" href="style.css">

<style>
	#txt1{
		border-color:#7FB3D5;
		 height:30px;
		}

	#txt1:focus{outline: 0;}

	#txt2
	{
	border-color:#7FB3D5;
	 height:30px;
	 width:251px;
	 border-radius: 5px;
	 font-size: 15px;
	}

	#txt2:focus{outline: 0;}

	#btn1{
		background-color: #7FB3D5;
		width: 80px;
		height: 34px;
		border-radius: 5px;
		border-color:green;
		font-size: 17px;
		}

	#btn1:hover{
		background-color:green;
		color: white;	
	}
	#btn1:focus{outline: 0px;}

</style>

</head>

<body background="chatbg.jpg">

	
<div id="main" >
	
	<div id="info">
		<center>
			
		<h2>Login Here</h2>
		<form action="login.php" method="post">
			<label><b>Username</b></label>
              <input type="text" name="uname" placeholder="User name" id="txt1" required="Please Enter Username"><br><br>
              <label><b>Password</b></label>
              &nbsp<input type="password" name="pass" placeholder="Password" id="txt2" required="Please Enter Password"><br><br>
              <input type="submit" name="submit" value="Login" id="btn1">


		</form>
</center>


<form action="signup.php" method="post">
	<center>
	<h2>Don't have an account? Sign up Here</h2>
	<label><b>Username:</b></label>
	<input type="text" name="uname" placeholder="Username" required="" id="txt1"><br><br>
	&nbsp<label><b>Email id:</b></label>
	&nbsp&nbsp<input type="text" name="Email" placeholder="Email" required="" id="txt1"><br><br>
    <label><b>Password:</b></label>
      &nbsp<input type="password" name="Password" placeholder="Password" required="" id="txt2"><br><br>
    <input type="submit" name="submit" value="Signup" id="btn1">

              	
    </button>
</form>
</center>

</div>
</div>

</body>
</html>