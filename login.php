<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$errors = login($_POST);

	if(count($errors) == 0)
	{
		header("Location: profile.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>| Login |</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Oxanium:wght@200..800&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Poppins, sans-serif;
		}

		body {
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			background: radial-gradient(circle at 24.1% 68.8%, rgb(50, 50, 50) 0%, rgb(0, 0, 0) 99.4%);
			background-size: cover;
			background-position: center;
			color: white;
			flex-direction: column;
		}

		h1 {
			font-size: 40px;
			margin-bottom: 20px;
			font-family: Oxanium, sans-serif;
		}

		.wrapper {
			width: 420px;
			background: transparent;
			border: 2px solid blueviolet;
			backdrop-filter: blur(20px);
			box-shadow: 0 0 10px #BC13FE;
			color: #fff;
			border-radius: 10px;
			padding: 30px 40px;
			transition: .5s ease-in-out;
			text-align: center;
		}

		.input-box {
			position: relative;
			width: 100%;
			height: 50px;
			margin: 30px 0;
		}

		.input-box input {
			width: 100%;
			height: 100%;
			background: transparent;
			border: none;
			outline: none;
			border: 2px solid blueviolet;
			border-radius: 6px;
			font-size: 16px;
			color: white;
			padding: 0 45px 0 20px;
			transition: .5s;
		}

		.input-box input::placeholder {
			color: rgba(255, 255, 255, .5);
		}

		.input-box i {
			position: absolute;
			top: 50%;
			right: 20px;
			transform: translateY(-50%);
			color: rgba(255, 255, 255, .5);
		}

		.remember-forgot {
			display: flex;
			justify-content: space-between;
			font-size: 15px;
			margin: -15px 0 15px;
		}

		.remember-forgot label input {
			accent-color: blueviolet;
			margin-right: 3px;
		}

		.remember-forgot a {
			color: #fff;
			text-decoration: none;
		}

		.remember-forgot a:hover {
			text-decoration: underline;
		}

		.btn {
			width: 100%;
			height: 45px;
			background: blueviolet;
			border: none;
			outline: none;
			border-radius: 40px;
			box-shadow: 0 0 10px rgba(0, 0, 0, .1);
			cursor: pointer;
			font-size: 16px;
			color: #333;
			font-weight: 600;
			margin-top: 20px;
			transition: .5s;
		}

		.btn:hover {
			background-color: #BC13FE;
			box-shadow: 0 0 15px #BC13FE;
		}

		.register-link {
			font-size: 15px;
			text-align: center;
			margin: 20px 0 15px;
		}

		.register-link p a {
			color: #fff;
			text-decoration: none;
			font-weight: 600;
		}

		.register-link p a:hover {
			text-decoration: underline;
		}

		nav {
			text-align: center;
			margin-bottom: 30px;
		}

		nav a {
			color: white;
			text-decoration: none;
			font-weight: 600;
			font-size: 18px;
			margin: 0 15px;
			transition: color 0.3s ease;
		}

		nav a:hover {
			color: blueviolet;
		}

		nav span {
			color: white;
			font-weight: 600;
			margin: 0 10px;
		}

		nav a + a:before {
			content: "·";
			margin: 0 10px;
			color: white;
		}
	</style>
</head>
<body>

	<header>
		<nav>
		
			<a href="login.php">Login</a>
			<a href="signup.php">Signup</a>
			<a href="verify.php">Verify</a>
			<a href="profile.php">Profile</a>
			<a href="logout.php">Logout</a>
			<span>|</span>
		</nav>
	</header>

	<div class="wrapper">
		<h1>Login</h1>

		<?php if(count($errors) > 0): ?>
			<div class="error-message">
				<?php foreach ($errors as $error): ?>
					<?= htmlspecialchars($error) ?><br>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<form action="login.php" method="post">
			<div class="input-box">
				<input type="email" name="email" placeholder="Email" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="password" name="password" placeholder="Password" required>
				<i class='bx bxs-lock-alt'></i>
			</div>
			<div class="remember-forgot">
				<label>
					<input type="checkbox">Remember me!</label>
				<a href="#">Forgot Password?</a>
			</div>
			<button type="submit" class="btn">Login</button>
			<div class="register-link">
				<p>Don't have an Account? <a href="signup.php">Register</a></p>
			</div>
		</form>
	</div>
</body>
</html>
