<?php

include("connection.php");
$room = $_POST['room'];

if(strlen($room)>15 or strlen($room)<2)
	{
		$msg= "Please Choose a Room Name between 2 to 15 characters!";

		echo '<script language = "javascript">';
		echo 'alert(" '.$msg.' ");';
		echo 'window.location = "http://localhost/chatbox/";';
		echo '</script>';
	}
$query = "SELECT * FROM chatroom WHERE room_name = '$room' ";
$result = mysqli_query($conn,$query);

if($result)
	{
	 if (mysqli_num_rows($result)>0) 
		{
			$msg= "Room already in use!. Please choose different Name";

			echo '<script language = "javascript">';
			echo 'alert(" '.$msg.' ");';
			echo 'window.location = "http://localhost/chatbox/";';
			echo '</script>';
		}
		
		else
		{
			$query = "INSERT INTO chatroom(room_name,chat_time) VALUES ('$room',CURRENT_TIMESTAMP)";
			
			if(mysqli_query($conn,$query))
			{
				$msg= "Your Room Is Ready For Chat! Please Share The Link ";

				echo '<script language = "javascript">';
				echo 'alert(" '.$msg.' ");';
				echo 'window.location = "http://localhost/search/chatbox/rooms.php?room_name='.$room.' ";';
				echo '</script>';
			}
		}
	}
else
	{
		echo "ERROR!".mysqli_error($conn);
	}

?>