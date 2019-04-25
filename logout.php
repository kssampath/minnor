<?php
  session_start();
$db = mysqli_connect("localhost","root","", "minnor");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$email=$_SESSION["email"];
 $y="UPDATE student SET  online='0' where email='$email'";
	   $result=mysqli_query($db,$y);
	    unset($_SESSION['email']);
	    session_destroy();
	      header('Location: index.php');
   ?>