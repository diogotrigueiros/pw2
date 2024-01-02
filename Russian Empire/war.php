<?php

session_start();

$db_host = "localhost";
$db_user = "user"; 
$db_password = "password"; 
$db_name = "russianEmpire";

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM war_slider");
    $stmt->execute();

    $sliderData = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="symbol.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <title>First World War</title>
</head>
<body><style>body { background-color: black; /*margin: 0;  padding: 0; display: flex; align-items: center; justify-content: center;  min-height: 100vh;*/ }</style>
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
                  <ul>
                    <a href="suggestions.php"><i class="fas fa-comment-medical"></i> Suggestions</a>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                  </ul>
                </div>
              </div> 
        </ul>
    </nav>
    <div class="slider-container">
        <button class="arrow prev" onclick="changeSlide(-1)">&#10094;</button>
        <div class="slider">
            <div class="slides">
                <?php foreach ($sliderData as $slide): ?>
                    <div class="slide">
                    <?php if ($slide['iframe_url']): ?>
                            <div class="slide-iframe">
                                <iframe width="809" height="454" src="<?= htmlspecialchars($slide['iframe_url']) ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                        <?php endif; ?>
                        <?php if ($slide['image_url']): ?>
                            <img src="<?= htmlspecialchars($slide['image_url']) ?>" alt="<?= htmlspecialchars($slide['title']) ?>">
                        <?php endif; ?>
                        <div class="slide-content">
                            <h2><?= htmlspecialchars($slide['title']) ?></h2>
                            <p><?= nl2br(htmlspecialchars($slide['content'])) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <button class="arrow next" onclick="changeSlide(1)">&#10095;</button>
    </div>
    <audio class="ura" id="audioMy"><source src="Soviet Battle cry.mp3" type="audio/mp3"></audio>
    <script src="war.js"></script> 
</body>
</html>
