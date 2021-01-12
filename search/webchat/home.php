<?php
error_reporting(0);
session_start();
include 'dbh.php';
?>


<!DOCTYPE html>
	<html>
	<link rel="icon" href="chat_logo1.png" sizes="27x27">
	<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="home.css">
	<style>
		body{
			background-color:#212F3C ;
		}
		#msg:focus{outline:0;}

		#lgt{
			width: 100%;
			background-color: #6495ed ;
			color: white;
			font-size: 20px;
			height:45px;
			border:none;
		}

		#lgt:hover{
			background-color:red;
			color: white;
		}
		#lgt:focus{outline: 0;}

	</style>

	</head>

<body background="chatbg.jpg">
	<div id="main">
     <h1 style="background-color: #6495ed; color: white;">&nbsp<i class="fa fa-circle" style="font-size:20px;color:green;"></i>  <?php echo 
     $_SESSION['name']?> -online</h1>
     <div class="output">
     	


<?php $sql = " SELECT * FROM posts";
$result = $conn->query($sql);


if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){ 
	echo " " . $row["name"] . " " . "  ::  " . $row["msg"] . "  --  " .$row["date"] . "<br>";
	echo "<br>";
   }
}
else{
	echo "0 results";
}
$conn->close();

?>

     </div>


<form method="post" action="send.php">
	<textarea name="msg" placeholder="Type to send message..." class="form-control" id="msg"></textarea><br>
	
<button style="font-size:18px; color:white; background-color:green;">Send <i class="fa fa-mail-forward"></i></button>

</form>

<br>

<form action="logout.php">
<br>
	<button id="lgt">Logout <i class="fa fa-power-off"></i></button>
</form>



	</div>
</body>

</html>