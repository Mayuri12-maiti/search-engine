<!DOCTYPE html>
<html>
<link rel="icon" href="website_images/logo.png" sizes="26x26">
<head>
	<title>Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	#searchfield
	{
		width: 600px;
		height: 30px;
		border-radius: 5px;
		border:1px solid green;
	}

	#searchfield:focus{outline: 0;}
	
	#gobtn
	{
		width: 100px;
		height: 35px;
		border-radius: 5px;
		border:1px solid green;
		background-color: white;
		font-size: 18px;
	}
#gobtn:focus{outline: 0;}

	#gobtn:hover
	{
		background-color: #5DADE2 ;
		color: white;
	}
	a{
		color: #0000cc;
		text-decoration: none;
	}

</style>

<meta name="viewport" content="width=device-width initial-scale=1">

</head>
<body>

<form action="" method="GET">
<table border="0" width="100%" bgcolor="#1B4F72 ">
	<tr>
		<td width="10%">
			<a href="index.php"><img src="Slogo.png" width="50%" style="margin-left: 28px; margin-top: 7px;"></a>
		</td>
		<td>
			<input type="text" name="search" id="searchfield">

			<input type="submit" name="searchbtn" value="GO!" id="gobtn">
		</td>
	</tr>
	
</table>
<table border="0" style="margin-left: 100px;">
	<tr>

<?php 
error_reporting(0);
include("connection.php");
if(isset($_GET['searchbtn']))
{
	$search = $_GET['search'];

	if($search =="")
	{
		echo "<b><p align='center'><font size='4'>Please write something in the searh box!</font></p></b>";
		exit();
	}

	$query = "select * from add_website where website_keyword like '%$search%' limit 0,10";
	$data = mysqli_query($conn,$query);
	if(mysqli_num_rows($data)<1)
	{
		echo "<b><p align='center'><font size='4'>Sorry! result not found</font></p></b>";
		exit();
	}
echo "<a href='#' style='margin-left:100px;'><font size='4'>More images for $search</font></a>";

while($row = mysqli_fetch_array($data))
	{
	echo "
		<td>
		<img src='$row[5]' width='200px;'>
		</td>

	";
	}
}
?>
</tr>
</table>

<?php include("finalsearch.php"); ?>

</body>
</html>