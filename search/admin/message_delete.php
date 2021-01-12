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
$id = $_GET['rs'];
$query = "delete from posts where id ='$id' ";

$data = mysqli_query($conn,$query);

if ($data)
{
	echo "<script>alert('Record Deleted From Database')</script>";
}
/*else{
	echo "Data not deleted from database";
}*/
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=message.php">

</META>
</body>
</html>

