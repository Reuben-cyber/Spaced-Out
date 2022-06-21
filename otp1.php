 <?php
include 'ShortHeaderBL.php';
session_save_path('../tmp');
session_start();
$code=$_SESSION["code"];
if(isset($_POST["submit"])){
	$otp=$_POST['otp'];
	$otp=strip_tags($otp);	
    if($otp==$code){ ?>
    	<form action="updatepassword.php" method="post">
    		<div style="margin-top: 15vw; ">
    			<center>
    		Enter New Password:<input type="password" name="pass" id="pass">
    		<input type="submit" name="submit" id="submit">
    	</center>
    	</form>
    	<?php
    }else{
    	echo "<script>alert('Wrong otp !');window.location.href='otpacc.php';</script>";
    }
}
?>
