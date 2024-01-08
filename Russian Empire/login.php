<!DOCTYPE html>
<html>
<link rel="shortcut icon" type="x-icon" href="loginUser.png">
<link rel="shortcut icon" type="x-icon" href="symbol.png">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<script>
        document.addEventListener('DOMContentLoaded', function () {
        var icon = document.querySelector('.hamburger-icon');
        var navList = document.querySelector('nav ul');

        icon.addEventListener('click', function () {
        navList.classList.toggle('show');
        });
    });
    </script>
<head>
    <title>Pagina de Login</title>
</head>

<body><style> body{ display: grid; place-items: center; text-align: center; background-size: cover; }</style>
    <nav class="mainpage">
    <a href="index.php"><img class="logo" src="symbol.png" alt="logo"></a>
    <a class="hamburger-icon" href="#"><i class="fas fa-bars"></i></a>
        <ul>
            <li><a href="church.php">Orthodox Church</a></li>
            <li><a href="war.php">First World War</a></li>
            <li><a href="rasputin.php">Rasputin</a></li>
            <li><a href="romanov.php">Romanov Dynasty</a></li>
            <li><a href="culture.php"><i class="fas fa-globe"></i></a></li>
            <div class="dropdown">
                <li><a href="#"><i class="fas fa-user"></i></a></li> <!--página do user onde vai dar para fazer logout e alterar definições do utilizador armezenadas tanto em sessions como em cookies-->
                <div class="dropdown-options">
                  <a href="suggestions.php">Suggestions</a>
                  <a href="logout.php">Logout</a>
                </div>
              </div> 
        </ul>
    </nav>
    <div class="slideshow-container">
    <div class="slide-fade" style="background-image: url('test6.jpg')">
            <!-- <img src="test6.jpg" alt="Slide 2"> -->
        </div>
        <div class="slide-fade" style="background-image: url('test.jpg')">
            <!-- <img src="test.jpg" alt="Slide 2"> -->
        </div>
        <div class="slide-fade" style="background-image: url('test2.jpg')">
            <!-- <img src="test2.jpg" alt="Slide 2"> -->
        </div>
        <div class="slide-fade" style="background-image: url('test3.jpg')">
            <!-- <img src="test3.jpg" alt="Slide 2"> -->
        </div>
        <div class="slide-fade" style="background-image: url('test4.jpg')">
            <!-- <img src="test4.jpg" alt="Slide 2"> -->
        </div>
        <div class="slide-fade" style="background-image: url('test5.jpg')">
            <!-- <img src="test5.jpg" alt="Slide 2"> -->
        </div>
    </div>        
    <form class="loginForm" method="POST" action="processar_login.php">
        <h2 class="h2Login">Login</h2>
        <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" placeholder="Username" name="username" id="username" required><br><br>
        </div>
        <div class="field">
            <span class="fa fa-lock"></span>
            <input type="password" placeholder="Password" name="password" id="password" required><br><br>
        </div>
        <input type="submit" value="Login">
    </form>
    <script defer src="script.js"></script>
</body>

</html>