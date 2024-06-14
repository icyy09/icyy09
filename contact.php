<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Page</title>
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
            min-height: 120vh;
            background: radial-gradient(circle at 24.1% 68.8%, rgb(50, 50, 50) 0%, rgb(0, 0, 0) 99.4%);
            flex-direction: column;
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

        .contact h1 {
            font-size: 40px;
            color: white;
            text-align: center;
            margin-bottom: 10px;
            font-family: Oxanium, sans-serif;
        }

        .contact form {
            width: 400px;
            text-align: center;
        }

        .input-box {
            display: flex;
            justify-content: space-between;
        }

        .input-field {
            width: 100%;
        }

        .field .item {
            width: 100%;
            padding: 18px;
            background: transparent;
            border: 2px solid blueviolet;
            outline: none;
            border-radius: 6px;
            font-size: 16px;
            color: white;
            margin: 12px 0;
        }

        .field.error .item {
            border-color: red;
        }

        .field .item::placeholder {
            color: rgba(255, 255, 255, .3);
        }

        .field .error-txt {
            font-size: 14.5px;
            color: red;
            text-align: left;
            margin: -5px 0 10px;
            display: none;
        }

        .field.error .error-txt {
            display: block;
        }

        .textarea-field .error-txt {
            margin-top: -10px;
        }

        .textarea-field .item {
            resize: none;
        }

        button {
            padding: 12px 32px;
            background: white;
            border: none;
            outline: none;
            border-radius: 6px;
            box-shadow: 0 0 10px blueviolet;
            font-size: 16px;
            color: #333;
            letter-spacing: 1px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 20px;
            transition: .5s;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index2.php">Home</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
            <a href="verify.php">Verify</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <section class="contact">
        <h1>Contact Us!</h1>

        <form action="#">
            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Full Name" id="name" class="item" autocomplete="off">
                    <div class="error-txt">Full Name can't be blank</div>
                </div>          
            </div>

            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Email Address" id="email" class="item" autocomplete="off">
                    <div class="error-txt">Email Address can't be blank</div>
                </div>          
            </div>

            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Phone Number" id="phone" class="item" autocomplete="off">
                    <div class="error-txt">Phone Number can't be blank</div>
                </div>          
            </div>

            <div class="input-box">
                <div class="input-field field">
                    <input type="text" placeholder="Subject" id="subject" class="item" autocomplete="off">
                    <div class="error-txt">Subject can't be blank</div>
                </div>          
            </div>

            <div class="textarea-field field">
                <textarea id="message" cols="30" rows="10" placeholder="Write Message" class="item" autocomplete="off"></textarea>
                <div class="error-txt">Message can't be blank</div>
            </div>

            <button type="submit">Send Message</button>
        </form>
    </section>
</body>
</html>
