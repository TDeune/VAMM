<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $felh = $_POST["felh"];
    $elet = $_POST["psw"];
    $telf = $_POST["telf"];
    $nem = $_POST["nem"];
    $pass = $_POST["pass"];
    $sql = "INSERT INTO user (email, felhnev, jelszo, eletkor, nem, telefonsz) VALUES ('$email', '$felh', '$pass', '$elet', '$nem', '$telf')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

$conn->close();
?>
