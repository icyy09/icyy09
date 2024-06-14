<?php  

require "functions.php";

$errors = array();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$errors = signup($_POST);

	if(count($errors) == 0)
	{
		header("Location: login.php");
		die;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
			color: white;
			flex-direction: column;
		}

		h1 {
			font-size: 40px;
			margin-bottom: 20px;
			font-family: Oxanium, sans-serif;
		}

		.container {
			width: 80%;
			max-width: 600px;
			background: rgba(0, 0, 0, 0.5);
			border: 2px solid blueviolet;
			backdrop-filter: blur(20px);
			box-shadow: 0 0 10px #BC13FE;
			border-radius: 10px;
			padding: 30px 40px;
			text-align: center;
		}

		.input-box {
			width: 100%;
			margin-bottom: 15px;
			position: relative;
		}

		.input-box input {
			width: 100%;
			padding: 10px;
			background: transparent;
			border: none;
			outline: none;
			border: 2px solid blueviolet;
			border-radius: 6px;
			font-size: 16px;
			color: white;
		}

		.input-box input::placeholder {
			color: rgba(255, 255, 255, .5);
		}

		.input-box i {
			position: absolute;
			top: 50%;
			right: 10px;
			transform: translateY(-50%);
			color: rgba(255, 255, 255, .5);
		}

		.error-message {
			color: red;
			margin-bottom: 15px;
		}

		button {
			padding: 12px 32px;
			background: blueviolet;
			border: none;
			outline: none;
			border-radius: 6px;
			box-shadow: 0 0 10px rgba(0, 0, 0, .1);
			font-size: 16px;
			color: #333;
			font-weight: 600;
			cursor: pointer;
			margin-top: 20px;
			transition: .5s;
			text-transform: uppercase;
		}

		button:hover {
			background-color: #BC13FE;
			box-shadow: 0 0 15px #BC13FE;
		}

		.header {
			width: 100%;
			padding: 20px;
			background: rgba(0, 0, 0, 0.5);
			display: flex;
			justify-content: center;
			align-items: center;
			margin-bottom: 30px;
		}

		.header a {
			color: white;
			margin: 0 15px;
			text-decoration: none;
			font-size: 16px;
		}

		.header a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<!-- Header -->
	<?php include('header.php');?>

	<div class="container">
		<h1>Signup</h1>

		<div class="error-message">
			<?php if(count($errors) > 0):?>
				<?php foreach ($errors as $error):?>
					<?= htmlspecialchars($error)?> <br>	
				<?php endforeach;?>
			<?php endif;?>
		</div>
		<form method="post">
			<div class="input-box">
				<input type="text" name="username" placeholder="Username" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="text" name="email" placeholder="Email" required>
				<i class='bx bxs-envelope'></i>
			</div>
			<div class="input-box">
				<input type="password" name="password" placeholder="Password" required>
				<i class='bx bxs-lock-alt'></i>
			</div>
			<div class="input-box">
				<input type="password" name="password2" placeholder="Retype Password" required>
				<i class='bx bxs-lock-alt'></i>
			</div>
			<button type="submit">Signup</button>
		</form>
	</div>
</body>
</html>
