	<?php
	session_save_path('../tmp');
session_start();
$uid=$_SESSION["uid"];
include("conn.php");

if(isset($_POST["submit"])){
$name=$_POST['name'];
$phone=$_POST['phno'];
$password=$_POST['psw1'];
$email=$_POST['email1'];
$name=strip_tags($name);
$phone=strip_tags($phone);
$password=strip_tags($password);
$email=strip_tags($email);
$name=mysqli_real_escape_string($con1,$name);
$phone=mysqli_real_escape_string($con1,$phone);
$password=mysqli_real_escape_string($con1,$password);
$email=mysqli_real_escape_string($con1,$email);
$type="u";
}
$sql="update users set name='$name', mobile=$phone ,u_email='$email' , password='$password' where u_id='$uid' ";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('updated  Successfull !');window.location.href='personal.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?>