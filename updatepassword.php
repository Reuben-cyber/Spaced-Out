<?php
include('conn.php');
session_save_path('../tmp');
session_start();
$email=$_SESSION['email'];
if(isset($_POST["submit"])){
	$password=$_POST['pass'];
}
$sql="UPDATE users set password='$password' where u_email='$email' ";
$run=mysqli_query($con1,$sql);

echo"<script>alert('Password Changed Successfully!');window.location.href='homebl.php';</script>";
