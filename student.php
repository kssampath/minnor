
<?php
$email="";
$password="";
$ivemail="";
$invpas="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(empty($_POST["email"]))
{
$ivemail="enter a your email";
}

else
{
$email= $_POST["email"];
$password=$_POST["password"];
$db = mysqli_connect("localhost","root","", "minnor");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$x="SELECT email FROM student where email='$email' and password='$password'";
$result = mysqli_query($db,$x);
$rowz=mysqli_num_rows($result);
if($rowz == 0) {
   $ivemail="enter a your a valid email";
} else {
	 session_start();
	   $_SESSION["email"]=$email;
	   $_SESSION["password"]=$_POST["password"];
	   $y="UPDATE student SET  online='1'";
	   $result=mysqli_query($db,$y);
	   $_SESSION["teacher"]="no";
    header('Location: index.php');
}

}

}
?>
	<html>
		<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="description" content="Custom Login Form Styling with CSS3" />
<link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	<style>
.error {color: #FF0000;}
body {
 
    font-weight: 300;
    font-size: 15px;
    color: #000;
    -webkit-font-smoothing: antialiased;
}
h1 {
    font-size: 36px;
    line-height: 40px;
}
.form-1 {
    /* Size & position */
    width: 300px;
    margin: 60px auto 30px;
    padding: 10px;
    position: relative; /* For the submit button positioning */

    /* Styles */
    box-shadow: 
        0 0 1px rgba(0, 0, 0, 0.3), 
        0 3px 7px rgba(0, 0, 0, 0.3), 
        inset 0 1px rgba(255,255,255,1),
        inset 0 -3px 2px rgba(0,0,0,0.25);
    border-radius: 5px;
    background: linear-gradient(#eeefef, #ffffff 10%);
}

.form-1 .field {
    position: relative; /* For the icon positioning */
}
.form-1 .field i {
    /* Size and position */
    left: 0px;
    top: 0px;
    position: absolute;
    height: 36px;
    width: 36px;

    /* Line */
    border-right: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: 1px 0 0 rgba(255, 255, 255, 0.7);

    /* Styles */
    color: #777777;
    text-align: center;
    line-height: 42px;
    transition: all 0.3s ease-out;
    pointer-events: none;
}
.form-1 input[type=text],
.form-1 input[type=password] {
    font-family: 'Lato', Calibri, Arial, sans-serif;
    font-size: 13px;
    font-weight: 400;
    text-shadow: 0 1px 0 rgba(255,255,255,0.8);

    /* Size and position */
    width: 100%;
    padding: 10px 18px 10px 45px;

    /* Styles */
    border: none; /* Remove the default border */
    box-shadow: 
        inset 0 0 5px rgba(0,0,0,0.1),
        inset 0 3px 2px rgba(0,0,0,0.1);
    border-radius: 3px;
    background: #f9f9f9;
    color: #777;
    transition: color 0.3s ease-out;
}

.form-1 input[type=text] {
    margin-bottom: 10px;
}

.form-1 input[type=text]:hover ~ i,
.form-1 input[type=password]:hover ~ i {
    color: #52cfeb;
}

.form-1 input[type=text]:focus ~ i,
.form-1 input[type=password]:focus ~ i {
    color: #42A2BC;
}

.form-1 input[type=text]:focus,
.form-1 input[type=password]:focus,
.form-1 button[type=submit]:focus {
    outline: none;
}
.form-1 .submit {
    /* Size and position */
    width: 65px;
    height: 65px;
    position: absolute;
    top: 17px;
    right: -25px;
    padding: 10px;
  
    /* Styles */
    background: #ffffff;
    border-radius: 50%;
    box-shadow: 
        0 0 2px rgba(0,0,0,0.1),
        0 3px 2px rgba(0,0,0,0.1),
        inset 0 -3px 2px rgba(0,0,0,0.2);
}
.form-1 button {
    /* Size and position */
    width: 100%;
    height: 100%;
    margin-top: -1px;

    /* Icon styles */
    font-size: 1.4em;
    line-height: 1.75;
    color: white;

    /* Styles */
    border: none; /* Remove the default border */
    border-radius: inherit;
    background: #52cfeb; /* Fallback */
    background: -moz-linear-gradient(#52cfeb, #42A2BC);
    background: -ms-linear-gradient(#52cfeb, #42A2BC);
    background: -o-linear-gradient(#52cfeb, #42A2BC);
    background: -webkit-gradient(linear, 0 0, 0 100%, from(#52cfeb), to(#42A2BC));
    background: -webkit-linear-gradient(#52cfeb, #42A2BC);
    background: linear-gradient(#52cfeb, #42A2BC);
    box-shadow: 
        inset 0 1px 0 rgba(255,255,255,0.3),
        0 1px 2px rgba(0,0,0,0.35),
        inset 0 3px 2px rgba(255,255,255,0.2),
        inset 0 -3px 2px rgba(0,0,0,0.1);

    cursor: pointer;
}

.icon-arrow-right:before          { content: "\f061"; }
		</style>
	<title>
Inertia.com
	</title>
	   <link rel="icon" href="images/rocket.png" type="image/png" sizes="16x16">

		</head>
 <body style="background-image:url(w.jpeg)">
 	<form  method="POST"  class="form-1"> 
	Email:
	<p class="field">
	<input type="text" name="email" placeholder="Username" value="<?php echo  $email ; ?>">
	<i class="fa fa-address-book"></i>
	</p> 
	<span class="error"><?php echo $ivemail ; ?></span>
	Password:
		<p class="field">
	<input type="password" name="password" placeholder="Password" value="<?php echo  $password ; ?>">
	<i class="fa fa-lock"></i>
	</p>  
	<span class="error"><?php echo $invpas ; ?></span>  
	<p class="submit">
    	<button type="submit" name="submit"><i class="fa fa-arrow-circle-right"  style="font-size:38px;color:white"></i></button>
	</p>
	<right><p class="error">forgot password ?</p></right>
	<h5>No account?<a href="sign-in.php">click here to sign-up</a></h5>
	<h5>Are you a tutor?<a href="teacher.php">click here to apply</a></h5>
	  </form>
</body>
</html>