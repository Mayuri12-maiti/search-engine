
<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "chatbox";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
	{
	die("Connection faild because:".mysqli_connect_error());
	}
/*else{
	echo "Connection ok!";
	}*/

?>