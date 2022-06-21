<?php
include('conn.php');
if(isset($_POST["submit"])){
$email=$_POST['email'];
$subject=$_POST['subject'];
$problem=$_POST['problem'];

$email=strip_tags($email);
$subject=strip_tags($subject);
$problem=strip_tags($problem);

$email=mysqli_real_escape_string($con1,$email);
$subject=mysqli_real_escape_string($con1,$subject);
$problem=mysqli_real_escape_string($con1,$problem);
$status='us';
}

$sql="INSERT INTO contactus VALUES (NULL, '$email','$subject','$problem','$status')";

if (mysqli_query($con1, $sql)) 
     {
     	echo "<script>alert('Your Query has been sent successfully !');window.location.href='contactus.php';</script>";
     }else
     {
     	echo "<script>alert('Error sending your Query !');window.location.href='contactus.php';</script>";
     }


?>