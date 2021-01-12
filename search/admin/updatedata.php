<?php
error_reporting(0);
include("connection.php");

$wid=$_GET['wid'];
$wt=$_GET['wt'];
$wl=$_GET['wl'];
$wk=$_GET['wk'];
$wd=$_GET['wd'];
$wi=$_GET['wi'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>imed SearchEngine</title>

<style>
	input
	{
		
		width: 600px;
		height: 30px;
		font-size: 20px;

	}
.inputbox{
	border-color: green;
}

	#addbtn
	{
		width: 150px;
		height: 35px;
		color: green;
		border: 1px solid green;
		background-color: white;
		border-radius: 5px;
		font-size: 17px;
	}
	#addbtn:hover
	{
		background-color: green;
		color: white;
	}
	#cancelbtn
	{
		width: 150px;
		height: 35px;
		color: red;
		border: 1px solid red;
		background-color: white;
		border-radius: 5px;
		font-size: 18px;
	}
	#cancelbtn:hover
	{
		background-color: red;
		color: white;
	}
</style>

</head>
<body>

<font size="7"><p align="center"><b><u>Edit/Update Website</u></b></p></font>

<form action="" method="POST" enctype="multipart/form-data">

<table border="0" width="60%" cellspacing="10" align="center">
	<div class="inputbox">

	<tr>
		<td width="25%">Website id</td>
		<td><input type="text" value="<?php echo $wid ?>" name="webid" style="border-color: green; border-radius: 5px;"></td>
	</tr>

	<tr>
		<td width="25%">Website Title</td>
		<td><input type="text" value="<?php echo $wt ?>" name="websitetitle" style="border-color: green; border-radius: 5px;"></td>
	</tr>
	<tr>
		<td>Website Link</td>
		<td><input type="text" value="<?php echo $wl ?>" name="websitelink" style="border-color: green; border-radius: 5px;"></td>
	</tr>
	<tr>
		<td>Website Keywords</td>
		<td><input type="text" value="<?php echo $wk ?>" name="websitekeywords" style="border-color: green; border-radius: 5px;"></td>
	</tr>
	<tr>
		<td>Website Description</td>
		<td><input type="" textarea cols="83" rows="5" value="<?php echo $wd ?>" name="websitedescription" style="border-color: green; border-radius: 5px;"></textarea></td>
	</tr>
	</div>
	<tr>
		<td>Website Images</td>
		<td><input type="file" value="<?php echo $wi ?>" name="uploadfile" style="font-size: 15px;"></td>
	</tr>
	<tr>
		<td colspan="2" align="center" style="height: 100px;"><input type="submit" name="submit1" value="Add Website" id="addbtn">
			&nbsp &nbsp
		<input type="submit" name="cancel" value="Cancel" id="cancelbtn">	
		</td>
	</tr>
</table>

</body>
</html>

<?php
require('connection.php');

if(isset($_GET['submit1']))

{
	$wid=$_GET['webid'];
	$wt=$_GET['websitetitle'];
	$wl=$_GET['websitelink'];
	$wk=$_GET['websitekeywords'];
	$wd=$_GET['websitedescription'];
	$wi=$_GET['uploadfile'];

	$query = "UPDATE add_website SET website_id='$wid', website_title='$wt', website_link='$wl', website_keyword='$wk', website_description='$wd', website_images='$wi' WHERE website_id='$wid'";

	$data = mysqli_query($conn,$query);

	if($data)
	{
		echo "<script>alert('Record Updated')</script>";
	}
	else
	{
		echo "Failed to Update Records!";
	}
}
?>



