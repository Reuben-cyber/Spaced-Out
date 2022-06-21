 <?php
session_save_path('../tmp');
session_start();
$code=$_SESSION["code"];
include'ShortHeaderBL.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">

	</head>
<body>
	<form action="otp.php" method="POST" class="main" style="width:50vw; margin-left: 25vw; height:8vw;">
		<center>
		<input type="text" name="otp" id="otp" placeholder="Enter the otp sent via email" style="width:40vw;height:2vw; margin-top: 2vw;"><br>
		<input type="submit" name="submit" id="submit" style="margin-left: 1vw;margin-top:1vw;">
	</center>
	</form>
</body>
</html>
