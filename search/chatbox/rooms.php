<?php

include("connection.php");
$roomname = $_GET['room_name'];

$query = "SELECT * FROM chatroom WHERE room_name = '$roomname'";

$result = mysqli_query($conn,$query);
if($result)
{
	if(mysqli_num_rows($result) == 0)
	{
		$msg= "This room does not exist, Kindly create a room name first ";

		echo '<script language = "javascript">';
		echo 'alert(" '.$msg.' ");';
		echo 'window.location = "http://localhost/chatbox/";';
		echo '</script>';
	}
}
else
{
	echo "ERROR!".mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Bootstrap css-->
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
  background-image: url("chatbg.jpg");
}
h2{
	color: #D6EAF8 ;
}
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.divScroll
{
	height: 400px;
	overflow-y: scroll;
}

</style>
</head>
<body>

<h2>Chat Messages For <?php echo $roomname; ?> </h2>

<div class="container">
	<div class="divScroll">
  	</div>
</div>



<br>
<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="Type Your Message Here">
<br>
<button class="btn btn-success" name="submitmsg" id="submitmsg">Send</button>

<!--Script-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<!--jQuery CDN-->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">  	
</script>


<script type="text/javascript">
//code for fetching messages
setInterval(runFunction,1000)
function runFunction()
{
	$.post("fetchmsg.php", {room: '<?php echo $roomname ?>'},
		function(data,status)
		{
			document.getElementsByClassName('divScroll')[0].innerHTML=data;
		}

		)
}

// Get the input field
var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});


$("#submitmsg").click(function()
{
	var clientmsg = $("#usermsg").val();

	$.post("postmsg.php", {text:clientmsg, room:'<?php echo $roomname; ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR']; ?>'},
	function(data,status)
	{
		document.getElementsByClassName('divScroll')[0].innerHTML = data;
	}
	);

	$("#usermsg").val("");

	return false;
}
);
</script>

</body>
</html>