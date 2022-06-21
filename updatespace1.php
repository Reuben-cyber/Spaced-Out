//list space connection file
<?php
session_save_path('../tmp');
session_start();
$uid=$_SESSION["uid"];
$spaceid=$_SESSION["spaceid"];

?>
<?php
include('conn.php');
if(isset($_POST["submit"])){
$name=$_POST['Name'];
$add=$_POST['Add'];
$phone=$_POST['Phone'];
$cat=$_POST['Category'];
$desc=$_POST['Description'];
$facility=$_POST['facility'];
$img=$_POST['img'];
$price=$_POST['rent'];

$name=strip_tags($name);
$add=strip_tags($add);
$phone=strip_tags($phone);
$cat=strip_tags($cat);
$desc=strip_tags($desc);
$img=strip_tags($img);
$price=strip_tags($price);

$name=mysqli_real_escape_string($con1,$name);
$add=mysqli_real_escape_string($con1,$add);
$phone=mysqli_real_escape_string($con1,$phone);
$cat=mysqli_real_escape_string($con1,$cat);
$desc=mysqli_real_escape_string($con1,$desc);
$img=mysqli_real_escape_string($con1,$img);
$price=mysqli_real_escape_string($con1,$price);
}

$facil="";
foreach($facility as $facil1)
{

	$facil .=$facil1.",";
}
$sql="update space_list SET c_name='$cat', space_name='$name', space_address='$add', space_description='$desc' ,phone=$phone ,facility='$facil', image='$img' ,price=$price where space_id='$spaceid' ";

if (mysqli_query($con1, $sql)) 
     {
      echo "<script>alert('Space Added Successfully !');window.location.href='homeal.php';</script>";
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 


