<?php
$servername = "localhost"; 
$username = "user"; 
$password = "password"; 
$database = "russianempire"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function addSuggestion($books, $movies) {
    global $conn;
    $sql = "INSERT INTO tsuggestions (books, movies) VALUES ('$books', '$movies')";
    return $conn->query($sql);
}

function updateSuggestion($id, $books, $movies) {
    global $conn;
    $sql = "UPDATE tsuggestions SET books='$books', movies='$movies' WHERE id=$id";
    return $conn->query($sql);
}

function deleteSuggestion($id) {
    global $conn;
    $sql = "DELETE FROM tsuggestions WHERE id=$id";
    return $conn->query($sql);
}

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'add':
            $books = $_POST['books'];
            $movies = $_POST['movies'];
            if (empty($books) && empty($movies)) {
                echo '<script>alert("At least one of the input fields must be filled!");</script>';
            } else {
                addSuggestion($books, $movies);
            }
            break;

        case 'update':
            $id = $_POST['id'];
            $books = $_POST['books'];
            $movies = $_POST['movies'];
            updateSuggestion($id, $books, $movies);
            break;

        case 'delete':
            $id = $_POST['id'];
            deleteSuggestion($id);
            break;
    }
}

$result = $conn->query("SELECT * FROM tsuggestions");
$suggestions = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $suggestions[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="symbol.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Suggestions of books and movies</title>
</head>
<body><style> body { margin: 20px; background-color: black; }</style>
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
                      <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?></a>
                    </div>
                  </div> 
            </ul>
        </nav>

    <form class="suggestionsForm" action="suggestions.php" method="post">
        <h2 class="suggestionsTitle">Book and Movie suggestions related to the russian Empire</h2>
        <input type="text" placeholder="Books" name="books">
        <input type="text" placeholder="Movies" name="movies">
        <input type="hidden" name="action" value="add">
        <button type="submit">Add suggestion</button>
    </form>

    <ul class="suggestionsMoviesBooks">
    <?php foreach ($suggestions as $suggestion): ?>
        <li>
            <form class="suggestionsUpdate" action="suggestions.php" method="post" style="display: inline;">
                <input type="hidden" name="id" value="<?php echo $suggestion['id']; ?>">
                <input type="hidden" name="action" value="update">
                
                <?php if (!empty($suggestion['books'])): ?>
                    <h3>Book</h3><style> h3 { color: gold; } </style>
                    <label for="books">Books:</label>
                    <input class="books" type="text" name="books" value="<?php echo $suggestion['books']; ?>" required>
                <?php endif; ?>

                <?php if (!empty($suggestion['movies'])): ?>
                    <h3>Movie</h3><style> h3 { color: gold; } </style>
                    <label for="movies">Movies:</label>
                    <input class="movies" type="text" name="movies" value="<?php echo $suggestion['movies']; ?>" required>
                <?php endif; ?>

                <button class="updateDelete" type="submit">Update</button>
            </form>
            
            <form class="suggestionsDelete" action="suggestions.php" method="post" style="display: inline;">
                <input type="hidden" name="id" value="<?php echo $suggestion['id']; ?>">
                <input type="hidden" name="action" value="delete">
                <button class="updateDelete" type="submit">Delete</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>
