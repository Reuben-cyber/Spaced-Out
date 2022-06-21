<?php
session_save_path('../tmp');
session_start();
require_once("composedlib/vendor/autoload.php");
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
include("conn.php");

if(isset($_POST["submit"])){
$name=$_POST['name'];
$phone=$_POST['phno'];
$password=$_POST['psw1'];
$email=$_POST['email1'];
$name=strip_tags($name);
$phone=strip_tags($phone);
$password=strip_tags($password);
$email=strip_tags($email);
$name=mysqli_real_escape_string($con1,$name);
$phone=mysqli_real_escape_string($con1,$phone);
$password=mysqli_real_escape_string($con1,$password);
$email=mysqli_real_escape_string($con1,$email);
$type="u";
$block="nb";
}
$sql="INSERT INTO users VALUES (NULL, '$name','$email','$password', $phone,'$type','$block')";
if (mysqli_query($con1, $sql)) 
     {
$code = rand(1000,9999);
$_SESSION["code"]=$code;
$addresses = array();
$sub="Your Verification OTP";
$addresses[$email] = $email;
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

echo "<script>alert('Email Sent Successfully !');window.location.href='otpacc.php';</script>".$result;
     } 
      else 
     {
      echo "Error: " . $sql . "<br>" . mysqli_error($con1);
	 }
?> 