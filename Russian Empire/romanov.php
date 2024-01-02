<?php 

session_start();

require 'romanovData.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="x-icon" href="symbol.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Romanov Dynasty</title>
</head>
<body><style>body { background-color: black; margin: 0; padding: 20px;}</style>
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
    <div class="profile-container">
    <?php foreach ($romanovMembers as $member) { ?>
        <div class="profile-card">
            <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>">
            <div class="profile-info">
                <h2><?= $member['name'] ?></h2>
                <p><strong>Date of Birth:</strong> <?= $member['dob'] ?></p>
                <p><strong>Date of Death:</strong> <?= $member['dod'] ?></p>
                <p><strong>Accomplishments:</strong> <?= $member['accomplishments'] ?></p>
                <p><strong>Life Description:</strong> <?= $member['description'] ?></p>
            <div class="audioFiles">
                <audio id="audio<?= str_replace(' ', '', $member['name']) ?>" src="<?= $member['audio'] ?>"></audio>
                <button class="action-button" onclick="playAudio('audio<?= str_replace(' ', '', $member['name']) ?>')"><i class="fas fa-play"></i> Play</button>
                <button class="action-button" onclick="stopAudio('audio<?= str_replace(' ', '', $member['name']) ?>')"><i class="fas fa-stop"></i> Stop</button>
            </div>
    </div>
        </div>
    <?php } ?>
</div>
<script src="romanov.js"></script>
</body>
</html>