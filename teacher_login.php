<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/teacher_login.css">
	<script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <title>Knowledge Master</title>
</head>
<body>

<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="t_register.php" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social" onclick="icon()"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social" onclick="icon()"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social" onclick="icon()"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="name" required/>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="text" placeholder="School/Institution" name="school" required/>
			<button type="submit" name="send">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="t_login.php" method="POST">
			<h1>Sign In</h1>
			<div class="social-container">
				<a href="#" class="social" onclick="icon()"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social" onclick="icon()"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social" onclick="icon()"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" required/>
			<input type="password" placeholder="Password" name="password" required/>
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep track your student performance log to website and stay updated</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello Teacher</h1>
				<p>Enter your personal details and start analysing your student performance</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<button class = "btn btn-primary btn-sm" style="background:-webkit-linear-gradient(to right, #FF4B2B, #FF416C); margin-top:30px;  font-family:'Code New Roman';"><a href = "s_main.php" style = "text-decoration: none; color: #fff;  font-size:18px;"><i class="fas fa-user-graduate"></i> STUDENT</a></button>
<script src="js/teacher_login.js"></script>
<script src="js/sweet.js"></script>
<script src="js/alert.js"></script>
</body>
</html>

<?php include 'sweet_alert_one.php'; ?>