 <?php
session_save_path('../tmp');
session_start();
$code=$_SESSION["code"];
if(isset($_POST["submit"])){
	$otp=$_POST['otp'];
	$otp=strip_tags($otp);	
    if($otp==$code){
    	echo "<script>alert('Signup successfull !');window.location.href='homebl.php';</script>";
    }else{
    	echo "<script>alert('Wrong otp !');window.location.href='otpacc.php';</script>";
    }
}
?>
