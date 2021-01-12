<?php
include("connection.php");
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
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{
	margin-top: 0%;
	margin-left:0%;
	background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(backad.jpg);
	height: 97.5vh;
	background-size: cover;
	background-position: center;
	}
a{
	text-decoration: none;
	color: white;
}
#pass{
	text-align: center;
	font-size: 21px;
}
#log{
	text-align: center;
	font-size: 21px;
}
#totallog{
	font-size: 20px;
}
#newadmin{
	text-align: center;
	font-size: 23px;
	padding-top: 0px;
}
#marq{
	margin-left:5%;
}

</style>

</head>
<body>
<table bgcolor="#154360" width="100%" height="80">
	<tr>
		<td align="left"><font color="yellow" size="5px" id="marq"><center><marquee width="60%" direction="left" height="70px"> Institute of Management and Entrepreneurship Development - [IMED]</marquee></center></font>
		</td>

		<td align="right"><font color="white" size="5px"><i class="fa fa-user-circle" style="font-size:27px;color:red"></i>Welcome <?php echo $_SESSION['user_name'];?></font>
		</td>
	</tr>
</table>

<br><br><br>

<table width="100%" border="0" height="200px" cellspacing="15px">
	<tr>
		<td width="20%" bgcolor="#A93226" rowspan="2" style="border-radius: 5px;font-family: sans-serif;"><font color="white" size="6"><center><i class="fa fa-list-alt" style="font-size:27px;color:white"></i><br> Total Website<br><?php  
		error_reporting(0);
			$query = "SELECT * FROM add_website";
			$data = mysqli_query($conn,$query);
			$total = mysqli_num_rows($data);
			if($data != 0)

			{
				echo "$total";
			}
		?> 
		</font></td>

		<td width="20%" bgcolor="#A93226"rowspan="2" style="border-radius: 5px;font-family: sans-serif;" id="totalog"><font color="white" size="6"><center><i class="fa fa-users" style="font-size:25px;color:white"></i><br>Total Login Admin<br>
			<?php  
		error_reporting(0);
			$query = "SELECT * FROM login_admin";
			$data = mysqli_query($conn,$query);
			$total = mysqli_num_rows($data);
			if($data != 0)

			{
				echo "$total";
			}
		?> 

		</font></td>
		<td width="20%" bgcolor="#A93226"rowspan="2" id="newadmin" style="border-radius: 5px;font-family: sans-serif;"><a href="new_admin.php" target="right"><i class="fa fa-user-plus" style="font-size:25px;color:white"></i><br>New Admin Registration</a></td>

		<td width="20%" bgcolor="green" id="pass" style="border-radius: 5px;font-family: sans-serif;"><a href="change_password.php" target="right"> Change Password</a></td>
	</tr>
	<tr>
		<td bgcolor="orange" id="log" style="border-radius: 5px;font-family: sans-serif;"><a href="http://localhost/search/admin/login.php" target="right"><i class="fa fa-power-off" style="font-size:20px;color:red; padding-top:5px;"></i> Logout</a></td>
	</tr>

</table>

</body>
</html>