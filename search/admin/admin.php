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
<link rel="icon" href="logo.png" sizes="26x26">
<head>
	<title>Admin pannel</title>
</head>

<frameset cols="14%,*" noresize border="0">
	<frame src="leftframe.php" name="left">
	<frame src="rightframe.php" name="right">
		
	</frame>
	
</frameset>


</html>