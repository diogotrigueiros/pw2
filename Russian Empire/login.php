<!DOCTYPE html>
<html>
<link rel="shortcut icon" type="x-icon" href="loginUser.png">
<link rel="shortcut icon" type="x-icon" href="symbol.png">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<head>
    <title>Pagina de Login</title>
</head>

<body><style> body{ display: grid; place-items: center; text-align: center; background-size: cover; }</style>
    <nav class="mainpage">
        <img class="logo" src="symbol.png" alt="logo">
        <ul>
            <li><a href="church.php">Orthodox Church</a></li>
            <li><a href="war.html">First World War</a></li>
            <li><a href="rasputin.html">Rasputin</a></li>
            <li><a href="romanov.php">Romanov Family</a></li>
            <li><a href="culture.php"><i class="fas fa-globe"></i></a></li>
            <div class="dropdown">
                <li><a href="#"><i class="fas fa-user"></i></a></li> <!--página do user onde vai dar para fazer logout e alterar definições do utilizador armezenadas tanto em sessions como em cookies-->
                <div class="dropdown-options">
                  <a href="settings.php">Settings</a>
                  <a href="logout.php">Logout</a>
                </div>
              </div> 
        </ul>
    </nav>
    <div class="slideshow-container">
        <div class="slide-fade">
            <img src="test6.jpg" alt="Slide 2">
        </div>
        <div class="slide-fade">
            <img src="test.jpg" alt="Slide 2">
        </div>
        <div class="slide-fade">
            <img src="test2.jpg" alt="Slide 2">
        </div>
        <div class="slide-fade">
            <img src="test3.jpg" alt="Slide 2">
        </div>
        <div class="slide-fade">
            <img src="test4.jpg" alt="Slide 2">
        </div>
        <div class="slide-fade">
            <img src="test5.jpg" alt="Slide 2">
        </div>
    </div>        
    <form method="POST" action="processar_login.php">
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