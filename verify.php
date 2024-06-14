<?php
require "mail.php";
require "functions.php";
check_login();

$errors = array();

// Ensure the verify table exists
function ensure_verify_table_exists() {
    $query = "CREATE TABLE IF NOT EXISTS verify (
        id INT AUTO_INCREMENT PRIMARY KEY,
        code INT NOT NULL,
        expires INT NOT NULL,
        email VARCHAR(255) NOT NULL
    )";
    database_run($query);
}

ensure_verify_table_exists();

if ($_SERVER['REQUEST_METHOD'] == "GET" && !check_verified()) {
    // Send email
    $vars['code'] = rand(10000, 99999);

    // Save to database, first remove any existing entries for this email
    $vars['email'] = $_SESSION['USER']->email;
    $delete_query = "DELETE FROM verify WHERE email = :email";
    database_run($delete_query, ['email' => $vars['email']]);

    // Insert new verification code
    $vars['expires'] = time() + (60 * 10);
    $insert_query = "INSERT INTO verify (code, expires, email) VALUES (:code, :expires, :email)";
    database_run($insert_query, $vars);

    // Send email
    $message = "Your code is " . $vars['code'];
    $subject = "Email Verification";
    send_mail($vars['email'], $subject, $message);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!check_verified()) {
        if (isset($_POST['code']) && is_numeric($_POST['code'])) {
            $query = "SELECT * FROM verify WHERE code = :code AND email = :email";
            $vars = array();
            $vars['email'] = $_SESSION['USER']->email;
            $vars['code'] = $_POST['code'];

            $row = database_run($query, $vars);

            // Debugging output
            echo '<pre>';
            var_dump($row);
            echo '</pre>';

            if (is_array($row) && count($row) > 0) {
                $row = $row[0];
                $time = time();

                if ($row->expires > $time) {
                    $id = $_SESSION['USER']->id;
                    $update_query = "UPDATE users SET email_verified = email WHERE id = :id LIMIT 1";
                    database_run($update_query, ['id' => $id]);

                    header("Location: index2.php");
                    die;
                } else {
                    $errors[] = "Code expired";
                }
            } else {
                $errors[] = "Wrong code";
            }
        } else {
            $errors[] = "Please enter a valid code";
        }
    } else {
        echo "You're already verified";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
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
            flex-direction: column;
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
        }

        .wrapper h1 {
            font-size: 40px;
            text-align: center;
            margin-bottom: 20px;
            font-family: Oxanium, sans-serif;
        }

        .wrapper p {
            font-size: 20px;
            text-align: center;
            margin-bottom: 20px;
            font-family: Oxanium, sans-serif;
        }


        .wrapper .input-box {
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
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: blueviolet;
            padding: 20px 45px 20px 20px;
            transition: .5s;
        }

        .input-box input::placeholder {
            color: #fff;
        }

        .wrapper .btn {
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
            transition: .5s;
            text-transform: uppercase;
        }

        .wrapper .btn:hover {
            background-color: #BC13FE;
            box-shadow: 0 0 15px #BC13FE;
        }

        .wrapper .error {
            font-size: 14px;
            color: red;
            text-align: left;
            margin-top: -10px;
            margin-bottom: 20px;
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
        <h1>Verify</h1>
        <p>An email was sent to your address. Paste the code from the email here:</p>
        <div class="error">
            <?php if (count($errors) > 0): ?>
                <?php foreach ($errors as $error): ?>
                    <?= htmlspecialchars($error) ?><br>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <form method="post">
            <div class="input-box">
                <input type="text" name="code" placeholder="Enter your Code" required>
            </div>
            <button type="submit" class="btn">Verify</button>
        </form>
    </div>

</body>
</html>
