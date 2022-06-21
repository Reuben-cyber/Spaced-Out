<?php
include'conn.php';
session_save_path('../tmp');
session_start();

$prod_id=$_GET['prod_id'];

$query="update space_list set verified='v' where space_id='$prod_id'";
$run=mysqli_query($con1,$query);

echo"<script>alert('Space has been verified !');window.location.href='spaceverification.php';</script>";
?>