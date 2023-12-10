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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM tlogin WHERE user = '$username' AND pass = sha1('$password')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "Credenciais inválidas. Tente novamente.";
    }
}

$conn->close();
?>
