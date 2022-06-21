<?php
include("conn.php");
if(isset($_POST["submit"]))
{
	$category=$_POST["category"];
	
	
}
if(isset($category))
{
	$Stream=trim($category);//trim removes whitespace;
	$Stream=strip_tags($category);//removes html syntax; 
	$Stream=mysqli_real_escape_string($con1,$category);//removes special charcterisitcs;
}
$asd="INSERT into categories VALUES (NULL,'$category')";
if(mysqli_query($con1,$asd)){
	echo"<script>alert('Added successfully!');window.location.href='addcat.php';</script>";
}else{
	echo "<script>alert('Cannot be added');window.location.href='addcat.php';</script>";
}
?>