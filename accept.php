<?php
include'conn.php';
session_save_path('../tmp');
session_start();

$prod_id=$_GET['prod_id'];

$query="update booked set status='accepted' where b_id='$prod_id'";
$run=mysqli_query($con1,$query);

echo"<script>alert('You accepted the request !');window.location.href='notification.php';</script>";
?>