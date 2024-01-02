<?php

session_start(); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="symbol.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Orthodox Church</title>
</head>
<body><style>body { background-color: black;}</style>
<nav class="mainpage">
        <a href="index.php"><img class="logo" src="symbol.png" alt="logo"></a>
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
                  <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
              </div> 
        </ul>
    </nav>
    <?php
    echo '<main class="orthodoxChurch">';

    require 'churchContent.php';

foreach ($orthodoxChurchInfo as $section) {
    echo '<section class="churchTopics">';
    echo '<h2>' . $section['title'] . '</h2>';
    
    foreach ($section['subsections'] as $subsection) {
        echo '<br>';
        echo '<br>';
        echo '<h3>' . $subsection['title'] . '</h3>';
        echo '<br>';
        echo '<li>' . $subsection['content'] . '</li>';
        echo '<br>';
        echo '<img src="' . $subsection['image'] . '" alt="' . $subsection['title'] . '">';
        echo '<br>';
    }
    
    echo '</section>';
}

echo '</main>';

?>
<audio class="churchMusic" id="myAudio" loop><source src="Girei (Pains Theme).mp3" type="audio/mp3"></audio>
</main>
<script src="church.js"></script>
</body>
</html>
