<?php
session_save_path('../tmp');
session_start();
require_once("composedlib/vendor/autoload.php");
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
include('conn.php');
if(isset($_POST["submit"])){
$mail=$_POST['mail'];
}

$sql="SELECT * FROM users WHERE u_email='".$mail."'";
$run=mysqli_query($con1,$sql);
$row=mysqli_fetch_array($run,MYSQLI_ASSOC);
if(mysqli_num_rows($run)==1){
	$code = rand(1000,9999);
$_SESSION["code"]=$code;
$_SESSION["email"]=$mail;
$addresses = array();
$addresses[$mail] = $mail;
$sub="forgot password otp";
$finalmsg = "<br><h3></h3> Your login code is <u><i><b><br>".$code."</b></i></u><br>";
$transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
  ->setUsername('spacedou100@gmail.com')
  ->setPassword('Spaced@123');
  $mailer = new Swift_Mailer($transport);
  $message = (new Swift_Message($sub))
 ->setFrom(['spaceou100@gmail.com'=>'Spaced Out'])
 ->setTo($addresses)
 ->setReplyTo(['spaceou100@gmail.com'=>'Spaced Out'])
 ->setBody($finalmsg, 'text/html');

$result = $mailer->send($message);

echo "<script>alert('Email Sent Successfully !');window.location.href='forgototp.php';</script>".$result;
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }

?>