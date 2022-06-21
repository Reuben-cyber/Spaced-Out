<?php
session_save_path('../tmp');
session_start();



include("conn.php");

if(isset($_POST["submit"])){
$user=$_POST['email'];
$pass=$_POST['pass'];
$user=strip_tags($user);
$pass=strip_tags($pass);
$user=mysqli_real_escape_string($con1,$user);
$pass=mysqli_real_escape_string($con1,$pass);
}

$sql="SELECT * FROM users WHERE u_email='".$user."' AND password='".$pass."'";
$run=mysqli_query($con1,$sql);
$row=mysqli_fetch_array($run,MYSQLI_ASSOC);

if(mysqli_num_rows($run) == 1){
	$_SESSION["loggedin"]=true;
	$_SESSION["uid"] = $row["u_id"];
	$_SESSION["utype"]=$row["type"];
	if($row['blocked']=="nb"){
	if($row['type'] == "a"){
		header("Location: admin.php");
	} else if($row['type'] == "u"){
               
		header("Location: homeal.php");
 	}
    else {
	echo "<script>alert('Wrong username and / or password!');window.location.href='homebl.php';</script>";
	     }
   }else {
		 echo "<script>alert('You are blocked');window.location.href='homebl.php';</script>"; 
	}
//mysqli_free_result($con);
mysqli_close($con1);
}
?>	