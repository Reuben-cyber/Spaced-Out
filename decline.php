<?php
include'conn.php';
session_save_path('../tmp');
session_start();

$prod_id=$_GET['prod_id'];

$query="update booked set status='declined' where b_id='$prod_id'";
$run=mysqli_query($con1,$query);

echo"<script>alert('You declined the request !');window.location.href='notification.php';</script>";
?>