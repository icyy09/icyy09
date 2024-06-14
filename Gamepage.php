



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="gamepagestyle.css" />
    <title>GHUB</title>
  </head>
  <body>

    
        <video autoplay loop muted class="vid">
            <source src="video/vid1.mp4" type="video/mp4">
        </video>
   

    <header>
      <div class="navbar">

         <a href="index2.php" class="logo">
          <img src="image/logo.png" alt="">
        </a>

        
        <ul class="links">
            <li><a href="index2.php">Home</a></li>
            <li><a href="Gamepage.php">Games</a></li>
            <li><a href="company.php">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="login.php" class="action_btn">Get Started</a>
        <div class="toggle_btn">
         <i class="fa-solid fa-bars"></i>
        </div>
      </div>

      <div class="dropdown_menu">
        <li><a href="index2.php">Home</a></li>
        <li><a href="videos/index.php">Gameplay</a></li>
        <li><a href="company.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        
        <li><a href="login.php" class="action_btn">Get Started</a></li>
      </div>
    </header>

      <div class="wrapper">
        <div class="container">
            <input type="radio" name="slide" id="c1" checked>
            <label for="c1" class="card">
                <div class="row">
                    <div class="icon">1</div>
                    <div class="description">
                        <h2><a href="https://www.cyberpunk.net/us/en/phantom-liberty" class="card_btn">Cyberpunk 2077</a></h2>
                        <p>Cyberpunk 2077 is an open-world RPG set in Night City, where players, as V, engage in a narrative-driven experience filled with choices and cybernetic enhancements.
                         </p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c2" >
            <label for="c2" class="card">
                <div class="row">
                    <div class="icon">2</div>
                    <div class="description">
                        <h2><a href="https://omlgames.com/en/game/ghostrunner-2-3/" class="card_btn">Ghost Runner 2</a></h2>
                        <p>Ghostrunner 2 is a fast-paced action game where players, as a cybernetic ninja, navigate a dystopian world using acrobatic skills and a katana.</p>
                    </div>
                </div>
            </label>
            <input type="radio" name="slide" id="c3" >
            <label for="c3" class="card">
                <div class="row">
                    <div class="icon">3</div>
                    <div class="description">
                        <h2><a href="https://www.ubisoft.com/en-gb/game/watch-dogs/legion" class="card_btn">Watch Dogs: Legion</a></h2>
                        <p>Watch Dogs: Legion allows players to recruit and control any NPC in a near-future London to build a resistance.</p>
                    </div>
                </div>
            </label>   

             <input type="radio" name="slide" id="c4" >
            <label for="c4" class="card">
                <div class="row">
                    <div class="icon">4</div>
                    <div class="description">
                        <h2><a href="https://www.stray.game/" class="card_btn">Stray</a></h2>
                        <p> Stray lets players explore a futuristic city as a stray cat, solving puzzles and interacting with robot inhabitants. </p>
                    </div>
                </div>
            </label>   

             <input type="radio" name="slide" id="c5" >
            <label for="c5" class="card">
                <div class="row">
                    <div class="icon"></a>5</div>
                    <div class="description">
                        <h2><a href="https://www.metrothegame.com/en-gb/" class="card_btn">Metro Exodus</a></h2>
                        <p>Metro Exodus is a story-driven shooter set in post-apocalyptic Russia, focusing on survival and exploration.</p>
                    </div>
                </div>
            </label>   

             <input type="radio" name="slide" id="c6" >
            <label for="c6" class="card">
                <div class="row">
                    <div class="icon">6</div>
                    <div class="description">
                        <h2><a href="https://www.machinegames.com/games/wolfenstein-the-new-order" class="card_btn">Wolfenstein: The New Order</a></h2>
                        <p> Wolfenstein: The New Order reimagines history with players fighting against a Nazi regime in an alternate 1960s.</p>
                    </div>
                </div>
            </label>   

          



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="jquery.hislide.js"></script>

    <script>
      $('.slide').hiSlide();
    </script>

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
