<?php 
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$password= $_POST['password'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$college=$_POST['college'];
$qual=$_POST['qual'];
$servername="localhost";
$dbname="minnor";
$username="root";
$password1="";
$conn = mysqli_connect($servername, $username, $password1, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO jobap (`name`,`password`,`sex`,`age`,`email`,`quali`,`college`,`phno`)
VALUES ('$name','$password','$sex','$age','$email','$qual','$college','$phone')";
$sql1 = "INSERT INTO teacher (`name`,`password`)
VALUES ('$name','$password')";
if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql1)) {
 $_SESSION['teacher']="no";    
	header('Location: index.php');
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}?>
