<?php
session_start();
$email = $_SESSION['email'];
// $register = $_SESSION['register'];
// $login = $_SESSION['login']; 
// if ($register==true){
// 	echo "<script>alert('Registration Sussessfull PLease Login To Continue');</script>";
// 	$_SESSION['register'] = false;
// }

// if ($login == false){
// 	echo "<script>alert('Incorrect Email / Password');</script>";
// }

?>

<html>
    <head>
        <title>Khaddi Pakistan Official Online Store - Khaadi PK</title>
        <link rel="shortcut icon" href="khaadi.png">
		<link rel="stylesheet" href="index_css.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
			$("#col1").mouseover(function(){
				$("#panel").slideToggle();
			});
            $("#panel").mouseleave(function(){
					$("#panel").slideUp();
            });
			});
        </script>
	</head>
	
	<body>
        <div class="header_home">
            <img src="khaadi_logo_1.png" alt="Logo" class="img_home_header">
            <div class="header_home_href">
                <a href="home.html">Home</a>
                <a id="col1" href="collections.html">Collections</a>
				<a href="registration.php">Account</a>
				<a href="cart.php">Cart</a>
            </div>
        </div>
        <div id="panel">
		<ul class="navbar-col">
		<li class = "nav-bar-box"><a href="PretColl.php">Pret Collection</a></li>
		<li class = "nav-bar-box"><a href="USColl.php">Unstitched Collection</a></li>
		<li class = "nav-bar-box"><a href="Khaas.php">Khaas Collection</a></li>
		</ul>
		</div>
		<br><br>
		<div class="container">
			<form action="register.php" method="post" class="form_setting" name="registerForm" onsubmit="return validateForm()">
				<h3>Register</h3>
				<input type="text" name="fname" placeholder="Enter First Name" required><br><br>
				<input type="text" name="lname" placeholder="Enter Last Name" required><br><br>
				<input type="email" name="email" placeholder="Enter Email" required><br><br>
				<input type="password" name="password" placeholder="Enter Password" required><br><br>
				<input type="password" name="cpassword" placeholder="Confirm Password" required><br><br>
				<input type="submit" name="register" value="Register">
			</form>
			<p class="form_setting"> <b>New Customer?<br></b> By creating an account with our store, 
				you will be able to move through the checkout process faster,
				 store multiple shipping addresses, view and track your orders in your account and more.
			</p>
			<form action="signin.php" name="loginForm" method="post" class="form_setting" onsubmit="return validateFormLogin()">
				<h3>Login</h3>
				<input type="hidden" name="">
				<input type="email" name="email" placeholder="Enter Email" required><br><br>
				<input type="hidden" name="">
				<input type="password" name="password" placeholder="Enter Password" required><br><br>
				<input type="hidden" name="">
				<input type="submit" name="login" value="Login"><br><br>
				<small><a href="forgotPass.php">Forgot Password?</a></small>
			</form>
		</div>
        <div class="footer">
            <p>Copyright &copy; 2020 Abdullah Jan Khan and Aleena Naveed</p>
		</div>
		<script>
			function validateFormLogin(){
				var z = document.forms["loginForm"]["email"].value;
				if (!z.endsWith(".com")){
					alert("Email Incorrect");
					return false;
				}
				return true;
			}

			function validateForm(){
			var x = document.forms["registerForm"]["password"].value;
			var y = document.forms["registerForm"]["cpassword"].value;
			var z = document.forms["registerForm"]["email"].value;
				if (!z.endsWith(".com")){
					alert("Email Incorrect");
					return false;
				}
				if (x === y) {
					return true;
				}
				else{
					document.forms["registerForm"]["password"]="";
					document.forms["registerForm"]["cpassword"]="";
					alert("Password Do Not Match");
					return false;
				}
			}
		</script>
    </body>
</html>