<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="x-icon" href="symbol.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script defer src="script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var icon = document.querySelector('.hamburger-icon');
        var navList = document.querySelector('nav ul');

        icon.addEventListener('click', function () {
        navList.classList.toggle('show');
        });
    });
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Russian Empire</title>
</head>

<body>
    <div class="hero">
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
                      <a href="suggestions.php"><i class="fas fa-comment-medical"></i> Suggestions</a>
                      <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></a>
                    </div>
                  </div> 
            </ul>
        </nav>
        <div class="backgroundImage">
        <!--<img src="russianEmpireFlag.jpg" alt="russianEmpireFlag">-->
        <!--<div class="slideshow-container">
            <div class="slide fade">
                <img src="russianEmpireFlag.jpg" alt="Slide 1">
            </div>
            <div class="slide fade">
                <img src="test6.jpg" alt="Slide 2">
            </div>
            <div class="slide fade">
                <img src="test.jpg" alt="Slide 2">
            </div>
            <div class="slide fade">
                <img src="test2.jpg" alt="Slide 2">
            </div>
            <div class="slide fade">
                <img src="test3.jpg" alt="Slide 2">
            </div>
            <div class="slide fade">
                <img src="test4.jpg" alt="Slide 2">
            </div>
            <div class="slide fade">
                <img src="test5.jpg" alt="Slide 2">
            </div>-->
            <!-- Add more slides as needed -->
        </div>
        <section>
            <div class="content">
                <h2>Russian Empire</h2>
                <h2>Russian Empire</h2>
                <!--<a href="#">Explorar</a>-->
            </div>
        </section>
    </div>
</body>

</html>