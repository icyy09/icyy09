<?php

	require "functions.php";
	check_login();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Profile</title>
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
			font-family: Orbitron, sans-serif;
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

		.action_btn {
		background-color: blueviolet;
		color: #fff;
		padding: 0.5rem 1rem;
		border: none;
		outline: none;
		border-radius: 10px;
		font-size: 1.5rem;
		font-weight: bold;
		cursor: pointer;
		transition: scale 0.2 ease;
		}

		.action_btn:hover {
		background: white;
		scale: 1.05;
		color: blueviolet;
		}

		.action_btn:active {
		scale: 0.95;
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
		<h1>Profile</h1>

		<?php if(check_login(false)):?>
			<p>Hi, <?=$_SESSION['USER']->username?>;</p>
			<br><br>
			<a href="index2.php" class="action_btn">Home</a>

			<br><br>
			<?php if(!check_verified()):?>
				<a href="verify.php">
					<button>Verify Profile</button>
				</a>
			<?php endif;?>
		<?php endif;?>
	</div>

</body>
</html>
