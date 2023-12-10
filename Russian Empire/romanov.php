<?php 

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
    <title>Romanov Family</title>
</head>
<body><style>body { background-color: black; margin: 0; padding: 20px;}</style>
    <nav class="mainpage">
        <a href="index.php"><img class="logo" src="symbol.png" alt="logo"></a>
        <ul>
            <li><a href="church.php">Orthodox Church</a></li>
            <li><a href="war.html">First World War</a></li>
            <li><a href="rasputin.html">Rasputin</a></li>
            <li><a href="romanov.php">Romanov Dynasty</a></li>
            <li><a href="culture.php"><i class="fas fa-globe"></i></a></li>
            <div class="dropdown">
                <li><a href="#"><i class="fas fa-user"></i></a></li> <!--página do user onde vai dar para fazer logout e alterar definições do utilizador armezenadas tanto em sessions como em cookies-->
                <div class="dropdown-options">
                  <a href="settings.php"><i class="fas fa-cog"></i> Settings</a>
                  <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </div>
              </div> 
        </ul>
    </nav>
    <div class="profile-container">
    <?php foreach ($romanovMembers as $member) {
        echo '<div class="profile-card">';
        echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '">';
        echo '<div class="profile-info">';
        echo '<h2>' . $member['name'] . '</h2>';
        echo '<p><strong>Date of Birth:</strong> ' . $member['dob'] . '</p>';
        echo '<p><strong>Date of Death:</strong> ' . $member['dod'] . '</p>';
        echo '<p><strong>Accomplishments:</strong> ' . $member['accomplishments'] . '</p>';
        echo '<p><strong>Life Description:</strong> ' . $member['description'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    ?>
    </div>
</body>
</html>