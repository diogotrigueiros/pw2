<?php

session_start(); 

$servername = "localhost";
$username = "user"; 
$password = "password"; 
$dbname = "russianEmpire"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$quoteResult = mysqli_query($conn, "SELECT * FROM tquotes");
$quotes = mysqli_fetch_all($quoteResult, MYSQLI_ASSOC);

$artResult = mysqli_query($conn, "SELECT * FROM tartitems");
$artItems = mysqli_fetch_all($artResult, MYSQLI_ASSOC);

$audioResult = mysqli_query($conn, "SELECT * FROM taudio");
$audioFiles = mysqli_fetch_all($audioResult, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="symbol.png">
    <link rel="stylesheet" href="style.css">
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
    <title>Golden Age of Russian Culture</title>
</head>
<body>
    <style>body { background-color: black; margin: 0; padding: 0;}</style>
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
                <li><a href="#"><i class="fas fa-user"></i></a></li>
                <!--página do user onde vai dar para fazer logout e alterar definições do utilizador armezenadas tanto em sessions como em cookies-->
                <div class="dropdown-options">
                    <a href="suggestions.php"><i class="fas fa-comment-medical"></i> Suggestions</a>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div>
        </ul>
    </nav>

    <div class="section" id="literature-section">
        <div class="quotes-container" id="literature-quotes-container">
            <?php foreach ($quotes as $quote): ?>
                <div class="quote">
                    <p><?php echo htmlspecialchars($quote['quote']); ?></p>
                    <p class="author">- <?php echo htmlspecialchars($quote['author']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="section" id="art-section">
        <div class="gallery-container" id="art-gallery-container">
            <?php foreach ($artItems as $art): ?>
                <div class="art-item">
                    <img src="<?php echo htmlspecialchars($art['image_url']); ?>" alt="art">
                    <li><?php echo htmlspecialchars($art['description']); ?></li>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="section" id="music-section">
        <div class="music-container" id="music-container">
            <?php foreach ($audioFiles as $audio): ?>
                <audio controls="" src="<?php echo htmlspecialchars($audio['audio_url']); ?>" class="music-player"></audio>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>
