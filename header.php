<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splendid Navigation</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: white;
            padding: 20px;
        }

        /* Navigation Container */
        nav {
            text-align: center;
            margin-bottom: 30px;
        }

        /* Navigation Links */
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

        /* Navigation Separator */
        nav span {
            color: white;
            font-weight: 600;
            margin: 0 10px;
        }

        /* Add some space between the links */
        nav a + a:before {
            content: "·";
            margin: 0 10px;
            color: #999;
        }
    </style>
</head>
<body>
	<header>
    <!-- Navigation Container -->
    <nav>
        <!-- Navigation Links -->

        <a href="login.php">Login</a>
        <a href="signup.php">Signup</a>
        <a href="verify.php">Verify</a>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
        <!-- Navigation Separator -->
        <span>|</span>
    </nav>
</header>
</body>
</html>
