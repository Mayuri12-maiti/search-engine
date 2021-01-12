<?php

include("connection.php");

$room = $_POST['room'];

$query = "SELECT message,ip,chat_time FROM messages WHERE room = '$room'";

$res = "";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0)
{
	while ($row = mysqli_fetch_assoc($result)) 
	{
		$res = $res.'<div class = "container">';
		$res = $res.$row['ip'];
		$res = $res."Says <p>". $row['message'];

		$res = $res . '</p> <span class = "time-right">' . $row["chat_time"].'</span></div>';
	}
}

echo $res;

?>