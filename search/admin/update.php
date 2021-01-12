<html>
<?php
/*session_start();
if(!isset($_SESSION['username']))
{
  echo"<script>alert('You Can not Reach this page! Please login first')</script>";
  echo "<a href='logout.php'><center><h2><b>Login Now</b></h2></a>";
}
else
{*/
session_start();
error_reporting(0);
$user=$_SESSION['user_name'];

if($user==true)
{

}
else
{
	header('location:login.php');
}

?>

<head>
	<style>
		#deletebtn{
			border-radius: 5px;
			text-decoration: none;
			border-color: red;
			size: 20%;
		}
		#deletebtn:hover{
			background-color: red;
			border:none;
			color: white;

		}
	</style>
</head>
<body>
<?php
require('connection.php');
error_reporting(0);
$rs=mysqli_query($conn,"select * from add_website");
echo "<center><table border='2'>";

echo "  <th bgcolor='#FADBD8'>website_id</th>
		<th bgcolor='#FADBD8'>website_title</th>
		<th bgcolor='#FADBD8'>website_link</th>
		<th bgcolor='#FADBD8'>website_keyword</th>
		<th bgcolor='#FADBD8'>website_description</th>
		<th bgcolor='#FADBD8'>website_images</th>
		<th bgcolor='#FADBD8'>Operations</th>";
		
while($f=mysqli_fetch_array($rs))
	{	
        echo "<tr>";
        echo "<td>".$f[0]."</td>";
        echo "<td>".$f[1]."</td>";
        echo "<td>".$f[2]."</td>";
		echo "<td>".$f[3]."</td>";
		echo "<td>".$f[4]."</td>";
		echo "<td>".$f[5]."</td>";
		echo "<td><a href='updatedata.php?wid=$f[0] & wt=$f[1] & wl=$f[2] & wk=$f[3] & wd=$f[4] & wi=$f[5]'><center><input type='submit' value='Update' id='updatebtn'></a></td>";
		echo "</tr>";
}
echo "</table>";

?>

</script>
</body>
</html>