<?php

//session_save_path('../tmp');
//session_start();

//following line is for new latest swiftmailer version 6.1.3
require_once("composedlib/vendor/autoload.php");
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
if(isset($_POST["submit"])){
	$sub=$_POST["sub"];
	$msg=$_POST["msg"];
}
$sub=strip_tags($sub);
$msg=strip_tags($msg);

$code = rand(1000,9999);
echo $code;
//$sub="my subject has changed";
$addresses = array();
//$addresses is an array     $addresses['abcd@hotmail.com'] = 'ABC Comapny'
//$finalmsg is a variable that will hold composed text message either in plain text or in HTML format
//$attached_file is the variable that contains the name of the file to be attached with the path
$addresses['pushp.mittal10@gmail.com'] = 'Pushp Mittal';
$finalmsg = "<h3>".$msg."</h3> Your login code is <u><i><b>".$code."</b></i></u><br>Yours sincerely,<br>Your Teacher";
$transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
  ->setUsername('mnwadekar14@gmail.com')
  ->setPassword('aaM233114#&dhule')
;
$mailer = new Swift_Mailer($transport);
$message = (new Swift_Message($sub))
 ->setFrom(['mnwadekar14@gmail.com'=>'Manjusha Wadekar'])
 ->setTo($addresses)
 ->setReplyTo(['mnwadekar14@gmail.com'=>'Manjusha Wadekar'])
 ->setBody($finalmsg, 'text/html')
;

$result = $mailer->send($message);

echo "Emails sent successfully ".$result;

?>