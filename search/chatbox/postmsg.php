<?php

include("connection.php");

$msg = $_POST['text'];
$room = $_POST['room'];
$ip = $_POST['ip'];

$sql = "INSERT INTO messages (message, room, ip, chat_time) VALUES ('$msg','$room','$ip',CURRENT_TIMESTAMP)";
mysqli_query($conn,$sql);
mysqli_close($conn);

?>