<DOCTYPE html>
    <?php
session_save_path('../tmp');
session_start();
?>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style2.css">
		<link rel="stylesheet" type="text/css" href="style1.css">
	</head>
	<?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
include'headeru.php';
}else{
    include'ShortHeaderBL.php';
}
?>
<body>
	<div>
	<form action="contact.php" method="POST" class="main" style="width:50vw; margin-left: 25vw; height:23vw; margin-top:10vw;">
		<center><h1>Contact Us</h1><br></center>
			<input type="text" name="email" id="email" style="width:40vw;height:2vw; margin-top:-1vw;" placeholder="Enter your Email-ID"><br>
		<input type="text" name="subject" id="subject" style="width:40vw;height:2vw;" placeholder="Enter the subject"><br>
		<input type="textarea" name="problem" style="width:40vw;height:5vw;"placeholder="Enter the body of the message"><br><br>
		<input type="submit" name="submit" id="submit">
	</form>
</div>
</body>
<div style="position: absolute; margin-top: 14.5vw;">
<?php
include'footer10.php';
?>
</div>
</html>




	