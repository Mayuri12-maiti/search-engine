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

require("connection2.php");
$uid = $_GET['rs'];
$query = "delete from signup where uid ='$uid' ";

$data = mysqli_query($conn,$query);

if ($data)
{
	echo "<script>alert('Record Deleted From Database')</script>";
}
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=login_user.php">

</META>
</body>
</html>

