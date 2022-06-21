<?php
session_save_path('../tmp');
session_start();
$utype=$_SESSION["utype"];
if($utype=='a')
{
header("Location: admin.php");
}else
{
header("Location: personal1.php");
}
?>