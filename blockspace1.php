<?php
include'conn.php';
session_save_path('../tmp');
session_start();

$prod_id=$_GET['prod_id'];

$query="delete from space_list where   space_id='$prod_id'";
$run=mysqli_query($con1,$query);

echo"<script>alert('You blocked the space !');window.location.href='blockspace.php';</script>";
?>