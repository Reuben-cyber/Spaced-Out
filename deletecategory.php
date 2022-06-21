<?php
include("conn.php");
if(isset($_POST["submit"]))
{
	$c_name=$_POST['delete'];
}

$asd="Delete from categories where c_name='$c_name'";
if(mysqli_query($con1,$asd)){
	echo"<script>alert('Deleted successfully!');window.location.href='#';</script>";
}else{
	echo "<script>alert('Cannot be Deleted');window.location.href='#';</script>";
}
?>