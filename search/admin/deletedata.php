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


<html>
<body>

	
<?php

require("connection.php");
$web_id = $_GET['rs'];
$query = "delete from add_website where website_id ='$web_id' ";

$data = mysqli_query($conn,$query);

if ($data)
{
	echo "<script>alert('Record Deleted From Database')</script>";
}
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=delete.php">

</META>
</body>
</html>

