<!DOCTYPE html>
<html>
<link rel="icon" href="website_images/logo.png" sizes="26x26">
<head>
	<title>IMED Search Engine</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	body{

		font-family: Monaco;
		background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url(imedIMG.jpg);
		height: 97.5vh;
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
	}

	#search
	{
		height: 38px;
		width: 45%;
		border-radius: 25px;
		border: 1px solid green;
		margin-top: -12px;
		font-size: 20px;
		font-family: Monaco;

	}
	#search:focus{outline: 0;}
	#submit
	{
		height: 40px;
		width: 130px;
		border-radius: 25px;
		border: 1px solid green;
		background-color: white;
		color: #2471A3 ;
		font-size: 22px;
		font-family: Monaco;
	}
	#submit:hover
	{
		background-color: #2471A3 ;
		color: white;
	
	}
	#submit:focus{outline: none;}

#chatbtn
{
	margin-left: 90%;
	font-family: Monaco;
	height: 40px;
	width: 60px;
	border-radius: 10px;
	border-color: green;
	border:none;
	background:none;
	margin-bottom: 2px;
}

#chatbtn:hover{
	background-color: none  ;
	color:white;
}
#chatbtn:focus{outline:0;}

#logo{
	width: 200px;
	/*float: center;*/
	margin-top: 2%;
}
.dropbtn {
 background:none;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  /*padding-left: 1200px;*/

}

.dropdown-content {
  display: none;
  position: absolute;
  background:none;
  border:none;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
   color: yellow;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;color:black;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background:none;}

</style>

<meta name="viewport" content="width=device-width initial-scale=1">

</head>
<body>

	<div class="dropdown">
  <button class="dropbtn"><i class="fa fa-comments-o" style="font-size:45px;color:yellow;"></i><br><marquee direction="left">Quick Chat</marquee></button>
  <div class="dropdown-content">
    <a href="webchat/index.php">Public Chat</a>
    <a href="chatbox/index.php">Private Chat</a>
  </div>
</div>

<form action="result.php" method="GET">
<br><br><br>

<center><img src="Slogo.png" width="10%" id="logo"></center>
<br>


<center><input type="text" name="search" id="search"><br><br>
<center><input type="submit" name="searchbtn" value="Search" id="submit"></center>

<br><br><br><br><div style="border:none; margin:30px 0px; color:#2471A3 ; font-size: 30px;">
       
       <marquee behavior="scroll" scrollamount='10' onmouseover='this.stop()' onmouseout='this.start()'>
         <img src="imed_logo.jpg" width="110" height="60"/> <b>Institute of Management and Entrepreneurship Development
       </marquee>
      </div>
</body>
</html>