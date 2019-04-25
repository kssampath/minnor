<?php
session_start();
$rndno=rand(100000, 999999);//OTP generate
$message = urlencode("otp number.".$rndno);
$to=$_POST['email'];
$subject = "OTP";
$txt = "OTP: ".$rndno."";
$headers = "From: inertiacom2019@gmail.com" . "\r\n" .
"CC: ";
mail($to,$subject,$txt,$headers);

$_SESSION['name']= $_POST['name'];
$_SESSION['email']= $_POST['email'];
$_SESSION['phone']= $_POST['phone'];
$_SESSION['password']= $_POST['password'];
$_SESSION['sex']=$_POST['sex'];
$_SESSION['age']=$_POST['age'];
$_SESSION['class']=$_POST['class'];
$_SESSION['school']=$_POST['school'];
$_SESSION['otp']=$rndno;
header( "Location: process.php" ); 
 ?>