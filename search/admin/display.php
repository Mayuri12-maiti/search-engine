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

<?php
require("connection.php");
$rs=mysqli_query($conn,"select * from add_website");
echo "<center><table border='2'>";

echo "  <th bgcolor='#FADBD8'>website_id</th>
		<th bgcolor='#FADBD8'>website_title</th>
		<th bgcolor='#FADBD8'>website_link</th>
		<th bgcolor='#FADBD8'>website_keyword</th>
		<th bgcolor='#FADBD8'>website_description</th>
		<th bgcolor='#FADBD8'>website_images</th>";
		
while($f=mysqli_fetch_array($rs))
	{	
        echo "<tr>";
        echo "<td>".$f[0]."</td>";
        echo "<td>".$f[1]."</td>";
        echo "<td>".$f[2]."</td>";
		echo "<td>".$f[3]."</td>";
		echo "<td>".$f[4]."</td>";
		echo "<td>".$f[5]."</td>";
		echo "</tr>";
}
echo "</table>";

?>