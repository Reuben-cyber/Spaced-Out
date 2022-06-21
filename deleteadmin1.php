<?php
include'conn.php';
session_save_path('../tmp');
session_start();


if(isset($_POST["submit"])){
$name=$_POST['name'];
$name=strip_tags($name);
$name=mysqli_real_escape_string($con1,$name);
}

$query="delete from users where name='$name' and type='a'";
$run=mysqli_query($con1,$query);

echo"<script>alert('You deleted the admin !');window.location.href='admin.php';</script>";
?>