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
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body{font-family: sans-serif;}
p{
	color: white;
}	
table{
	color: grey;

}
.colorchange:hover
{
	color: white;
}
a{
	text-decoration: none;
	color: grey;
}
a:hover{
	color: white;
}

</style>

</head>
<body bgcolor="black">

<p><font size="5" style="padding-left:12px;margin-top:10%;"><i class="fa fa-navicon" style="font-size:22px;color:green;"></i>Operations</font></p>

<br><br>
<table border="0" width="100%" cellspacing="15px">
	<tr>
		<td class="colorchange"><font size="5"><a href="rightframe.php" target="right"><i class="fa fa-tachometer" style="font-size:22px;color:green;"></i>Dashboard</a></font></td>
	</tr>
	<tr>
		<td bgcolor="green"><font color="white"><font size="4">Website</font></td>
	</tr>
	<tr>
		<td class="colorchange" ><font size="4"><a href="insert_website.php" target="right"><i class="fa fa-plus" style="font-size:22px;color:green;"></i> Add Data</a></font></td>
	</tr>
	<tr>
		<td class="colorchange" ><font size="4"><a href="display.php" target="right"><i class="fa fa-eye" style="font-size:22px;color:green;"></i> View Data</a></font>
		</td>
	</tr>

	<tr>
		<td class="colorchange"><font size="4"><a href="update.php" target="right"><i class="fa fa-wrench" style="font-size:22px;color:green;"></i>Update</a></font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="4"><a href="delete.php" target="right"><i class="fa fa-trash-o" style="font-size:22px;color:green;"></i>Delete</a></font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="4"><a href="message.php" target="right"><i class="fa fa-envelope" style="font-size:22px;color:green;"></i>Message</a></font></td>
	</tr>
	<tr>
		<td class="colorchange"><font size="4"><a href="login_user.php" target="right"><i class="fa fa-user" style="font-size:22px;color:green;"></i>Users</a></font></td>
	</tr>
</table>

</body>
</html>