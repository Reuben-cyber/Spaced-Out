<script>
alert('Confirm Booking!To change date or time please press back button');

</script>
<?php
session_save_path('../tmp');
session_start();

include'conn.php';

$startDate=$_POST['start_date'];
$endDate=$_POST['end_date'];
$startTime=$_POST['start_time'];
$endTime=$_POST['end_time'];
$sid=$_SESSION["spaceid"];
$uid=$_SESSION["uid"];

$startDate=strip_tags($startDate);
$endDate=strip_tags($endDate);
$startTime=strip_tags($startTime);
$endTime=strip_tags($endTime);

$startDate=mysqli_real_escape_string($con1,$startDate);
$endDate=mysqli_real_escape_string($con1,$endDate);
$startTime=mysqli_real_escape_string($con1,$startTime);
$endTime=mysqli_real_escape_string($con1,$endTime);

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
	//echo"<script>alert('Booking Details Sent To The Place Owner!!');window.location.href='space.php';</script>";

$sql="INSERT INTO booked(b_id,space_id,u_id,startDate,endDate,startTime,endTime,status) VALUES (NULL,'$sid','$uid','$startDate','$endDate','$startTime','$endTime','waiting')";
if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('booking detail send !');window.location.href='homeal.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
}
else
{
	echo"<script>alert('You need to Login first!!');window.location.href='homebl.php';</script>";	
}

?>
<DOCTYPE html>
	<html>
	</html>
