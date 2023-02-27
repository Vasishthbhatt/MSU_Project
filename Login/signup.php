<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="validation.js"></script>
</head>
<body>
   
	<div class="signup-box">
		<h2>Sign Up Here</h2>
		<form name = "signupForm" action="signup.php" method="POST" onsubmit="return validateSignupForm()">
			<p>Username:</p>
			<input type="text" name="username" id="username" value ="" placeholder="Enter Username">
			<p id="username_err">Username cannot be empty</p>
			<p>Email:</p>
			<input type="email" name="email" id = "email" value="" placeholder="Enter Email">
			<p>Password:</p>
			<input type="password" name="password" id="password" value="" placeholder="Enter Password">
			<p id="pass_err">
				Password must contain atleast on Capital letter. <br>
				Password must contain atleast one Number. <br>
				Password must be greater than 7 charachters. <br>
				Password must contain atleast one special charachter.<br>
			</p>
			<input type="submit" name="submit" value="Sign Up" >
			<p>Already have an account? <a href="login.php">Login</a></p>
		</form>
	</div>
</body>
</html>
