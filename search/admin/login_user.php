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
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
		#deletebtn:focus{outline: 0;}


	</style>
</head>
<body>

<?php
require("connection2.php");
$rs=mysqli_query($conn,"select * from signup");
echo "<center><table border='2' width='60%' height='20%'>";
echo "  <th bgcolor='#212F3C' style='color:white;'>User_ID</th>
		<th bgcolor='#212F3C' style='color:white;'>Username</th>
		<th bgcolor='#212F3C' style='color:white;'>Email</th>
		<th bgcolor='#212F3C' style='color:white;'>Password</th>
		<th bgcolor='#212F3C' style='color:white;'>Operation</th>";
		
while($f=mysqli_fetch_array($rs))
	{	
        echo "<tr>";
        echo "<td>".$f[0]."</td>";
        echo "<td>".$f[1]."</td>";
        echo "<td>".$f[2]."</td>";
		echo "<td>".$f[3]."</td>";
		echo "<td><a href='login_delete.php?rs=$f[0]' onclick = 'return checkdelete()'><center>
		<button id='deletebtn'>Delete <i class='fa fa-trash'></i></button></a></td>";
		echo "</tr>";
}
echo "</table>";

?>
<script>
	function checkdelete()
	{
		return confirm('Are you sure you want to delete this user!');
	}
</script>
</body>
</html>