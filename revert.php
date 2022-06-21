<?php
include('conn.php');
//session_save_path('../tmp');
//session_start();

//following line is for new latest swiftmailer version 6.1.3
require_once("composedlib/vendor/autoload.php");
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
if(isset($_POST["submit"])){
	$message1=$_POST['message'];
}
$prod_id=$_GET['prod_id'];
$query="select * from contactus where ccid='$prod_id'";
$run=mysqli_query($con1,$query);
while($res = mysqli_fetch_array($run)) {
	$email=$res['email'];
//$sub="Your Issue will be solved shortly";
$addresses = array();
$addresses[$email] = $email;
$finalmsg = "<br><h3></h3> <i><b><br>".$message1."</b></i></u><br>";
$transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
  ->setUsername('spacedou100@gmail.com')
  ->setPassword('Spaced@123')
;
$mailer = new Swift_Mailer($transport);
$message = (new Swift_Message($message1))
 ->setFrom(['spaceou100@gmail.com'=>'Spaced Out'])
 ->setTo($addresses)
 ->setReplyTo(['spaceou100@gmail.com'=>'Spaced Out'])
 ->setBody($finalmsg, 'text/html')
;

$result = $mailer->send($message);
$query1="update contactus set status='s' where ccid='$prod_id'";
$run1=mysqli_query($con1,$query1);

echo "<script>alert('Email sent successfully !');window.location.href='admin.php';</script>";
}
?>