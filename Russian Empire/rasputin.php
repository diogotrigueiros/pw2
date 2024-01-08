<?php

session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="symbol.png">
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
    <title>Rasputin</title>
</head>
<body>
<style>
    body {
        background-color: black;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
</style>
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
                  <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
            </div> 
    </ul>
</nav>
<main class="rasputin">
<?php

$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "russianempire";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM trasp";
    $stmt = $pdo->query($sql);

    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<section class="rasputinTopics">';
            echo '<h2 class="accordion"> < ' . $row['title'] . ' > </h2>';
            echo '<p>' . $row['content'] . '</p>';
            if (!empty($row['image'])) {
                echo '<img src="' . $row['image'] . '" alt="' . $row['title'] . '">';
            }
            if (!empty($row['quote'])) {
                echo '<p class="quote">' . $row['quote'] . '</p>';
            }
            if ($row['id'] == 7 && !empty($row['legacy_and_influence_video'])) {
                echo '<div style="display: flex; justify-content: center; align-items: center; height: 100%;">';
                echo '<iframe width="860" height="415" src="' . $row['legacy_and_influence_video'] . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                echo '</div>';
            }                   
            echo '</section>';
        }
    } else {
        echo "0 results";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$pdo = null;
?>
</main>
<script src="rasputin.js"></script>
</body>
</html>
