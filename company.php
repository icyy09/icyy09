<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: poppins;
                background-color: black;
            }
            #about-section {
                width: 100%;
                height: auto;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 80px 12%;
            }
            .about-left img{
                width: 420px;
                height: auto;
                transform: translateY(50px);
            }
            .about-right {
                width: 54%;
            }

            .about-right ul li {
                display: flex;
                align-items: center;
            }

            .about-right h1 {
                color: #FF0000;
                font-size: 37px;
                margin-bottom: 5px;
            }

            .about-right p {
                color: #eee;
                line-height: 26px;
                font-size: 20px;
            }

            .about-right .address {
                margin: 25px 0;
            }

            .about-right .address ul li {
                margin-bottom: 5px;
            }

            .address .address-logo {
                margin-right: 15px;
                color: #FF0000;
            }

            .address .saprater {
                margin: 0 35px;
            }

            .about-right .expertise ul {
                width: 80%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .expertise h3 {
                margin-bottom: 10px;
            }

            .expertise .expertise-logo {
                font-size: 19px;
                margin-right: 10px;
                color: #FF0000;
            }

            /* Header */
header {
    position: fixed;
    top: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    color: white;
    z-index: 1000;
}

.navbar {
  width: 100%;
  height: 60px;
  max-width: 1800px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  color: white;
}



.navbar .logo a {
  font-size: 1.5rem;
  font-weight: bold;
  color: red;
}

.navbar .title a {
  font-size: 1.5rem;
  font-weight: bold;
  color: red;
}

.navbar .links {
  display: flex;
  gap: 2rem;
  color: red;
}

.navbar .toggle_btn {
  color: red;
  font-size: 1.5rem;
  cursor: pointer;
  display: none;
}

.action_btn {
  background-color: red;
  color: #fff;
  padding: 0.5rem 1rem;
  border: none;
  outline: none;
  border-radius: 10px;
  font-size: 0.8rem;
  font-weight: bold;
  cursor: pointer;
  transition: scale 0.2 ease;
}

.action_btn:hover {
  background: white;
  scale: 1.05;
  color: black;
}

.action_btn:active {
  scale: 0.95;
}

/*Dropdown Menu*/

.dropdown_menu {
  display: none;
  position: absolute;
  right: 2rem;
  top: 60px;
  height: 0;
  width: 300px;
  background-color: red;
  backdrop-filter: blur(15px);
  border-radius: 10px;
  overflow: hidden;
  transition: height .2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  z-index: 101;
}

.dropdown_menu.open {
  height: 240px;
}


.dropdown_menu li {
  padding: 0.7rem;
  display: flex;
  align-items: center;
  justify-content: center;
  color: red;
}

.dropdown_menu .action_btn {
  width: 100%;
  display: flex;
  justify-content: center;
}

.about-left{
   position: relative;
}

.about-left img{
  width: 550px;
  transform-style: preserve-3d; /* Enable 3D transforms */
  animation: rotate3D 5s infinite linear;
}

@keyframes rotate3D {
  0% {
    transform: rotateX(0deg) rotateY(0deg);
  }
  100% {
    transform: rotateX(360deg) rotateY(360deg);
  }
}
        </style>
    </head>

    <body>
        <header>
      <div class="navbar">
        <div class="logo"><a href="index2.php"> GamingHub.</a></div>
        <div class="title"><a href="#"></a></div>
        <ul class="links">
            <li><a href="index2.php" style="color: red;">Home</a></li>
            <li><a href="Gamepage.php" style="color: red;">Games</a></li>
            <li><a href="company.php" style="color: red;">About Us</a></li>
            <li><a href="contact.php" style="color: red;">Contact</a></li>
        </ul>
        <a href="login.php" class="action_btn">Get Started</a>
        <div class="toggle_btn">
         <i class="fa-solid fa-bars"></i>
        </div>
      </div>

      <div class="dropdown_menu">
        <li><a href="index2.php">Home</a></li>
        <li><a href="Gamepage.php">Games</a></li>
        <li><a href="company.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php" class="action_btn">Get Started</a></li>
      </div>
    </header>
        <section id="about-section">
            <!-- about left  -->
            <div class="about-left">
                <img src="image/logo.png" alt="About Img"/>
            </div>

            <!-- about right  -->
            <div class="about-right">
                <h4>Our Story</h4>
                <h1>About Us</h1>
                <p>GamingHub is a comprehensive web platform dedicated to the world of gaming. Our site offers an extensive range of features tailored to meet the diverse needs of gamers everywhere. From the latest game releases and industry news to forums where gamers can connect and discuss their favorite titles, GamingHub is designed to be the ultimate online destination for gaming enthusiasts.
                </p>
                <div class="address">
                    <ul>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-paper-plane"></i>
                            </span>
                            <p>Address</p>
                            <span class="saprater">:</span>
                            <p>Poblacion, Clav Land, Mis.Or.</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                            <p>Phone No</p>
                            <span class="saprater">:</span>
                            <p>+91 987-654-4321</p>
                        </li>
                        <li>
                            <span class="address-logo">
                                <i class="far fa-envelope"></i>
                            </span>
                            <p>Email ID</p>
                            <span class="saprater">:</span>
                            <p>gaming.hub.ustp@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div class="expertise">
                    <h3>Our Expertise</h3>
                    <ul>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-html5"></i>
                            </span>
                            <p>HTML</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-css3-alt"></i>
                            </span>
                            <p>CSS</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-node-js"></i>
                            </span>
                            <p>Java Script</p>
                        </li>
                        <li>
                            <span class="expertise-logo">
                                <i class="fab fa-react"></i>
                            </span>
                            <p>React Js</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <script>
      const toggleBtn = document.querySelector('.toggle_btn')
      const toggleBtnIcon = document.querySelector('.toggle_btn i')
      const dropDownMenu = document.querySelector('.dropdown_menu')

      toggleBtn.onclick = function (){
        dropDownMenu.classList.toggle('open')
        const isOpen = dropDownMenu.classList.contains('open')

        toggleBtnIcon.classList = isOpen
        ? 'fa-solid fa-xmark'
        : 'fa-solid fa-bars'

      }
    </script>
    </body>

</html>
