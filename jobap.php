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

.icon-arrow-right:before          { content: "\f061"; }
		</style>
	<title>
Inertia.com
	</title>
	   <link rel="icon" href="images/rocket.png" type="image/png" sizes="16x16">

		</head>
 <body style="background-image:url()">
<center><br>
<h2><b>Sign In</b></h2>
</div>
<br>
 	<form  method="POST"  class="form-1" action="jobap1.php"> 
<h5><label><b>Name :</b></label><br>
<input type="text" placeholder="Name" name="name" size="35"><br>
<label><b>Email :</b></label></br>
<input type="text" placeholder="e-mail" name="email" size="35"><br>
<label><b>Phone :</b></label></br>
<input type="text" placeholder="phone" name="phone" size="35"><br>
<label><b>Gender :</b></label></br>
<input type="text" placeholder="sex" name="sex" size="35"><br>
<label><b>age :</b></label></br>
<input type="text" placeholder="age" name="age" size="35"><br>
<label><b> Qualification:</b></label></br>
<input type="text" placeholder="class" name="qual" size="35"><br>
<label><b>college :</b></label></br>
<input type="text" placeholder="college" name="college" size="35"><br>
<label><b>Password :</b></label></br>
<input type="text" placeholder="password" name="password" size="35"><br>
<h6><button>Submit</button></h6>
</h5>
</form>
</center>
</body></html>