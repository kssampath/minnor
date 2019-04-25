<?php
// define variables and set to empty values
$name = $email = $sex = $age = $quali = $phno = $college ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $sex = test_input($_POST["sex"]);
  $class = test_input($_POST["class"]);
$school = test_input($_POST["school"]);
$servername = "localhost";
$username = "";
$password = "";
$dbname = "minnor";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO studentap ( name, sex, age, class, school, college, email)
VALUES ($name, $sex, $age,$class,$school,$college,$email)";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

  }