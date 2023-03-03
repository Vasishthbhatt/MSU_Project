<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="validation.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled">Disabled</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<?php
	session_start();
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		if(isset($_SESSION['username'])){
			header('location:signup.php');
			exit;
		}
		$con = mysqli_connect('localhost', 'root',);
		if(!$con){
			echo '<div class="alert alert-success" role="alert">
			Cannot connect to database 
		  </div>';
		  exit;
		}
		mysqli_select_db($con, 'msu');
		$username = $_POST["username"];
		$password = $_POST["password"];

		$q = " select * from gec where username = '$username' && password = '$password' ";
		$result = mysqli_query($con, $q);
		$num = mysqli_num_rows($result);
		if ($num == 1) {
			echo '<div class="alert alert-success" role="alert">
			Login Succesful 
		  </div>';
		  sleep(2);
		  header('location:Welcome.php');
		} else {
			echo '<div class="alert alert-danger" role="alert">
		  Login Unsuccesful 
		 </div>';
		}

	}
	?>



	<div class="login-box">
		<h2>Login Here</h2>
		<form action="<?php
						echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			<p>Username:</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password:</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<p>Don't have an account? <a href="signup.php">Sign up</a></p>
			<p>Forgotpassword<a href="forgotpassword.php">Forgotpassword</a></p>
		</form>
	</div>
</body>

</html>