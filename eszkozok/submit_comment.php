<?php
session_start();
if (isset($_SESSION['username'])) {

    $szekcio = $_SESSION['szekcio'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comment_section_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email and comment from form
    $username = $_SESSION["username"];
    $comment = $_POST["comment"];

    // Prepare SQL statement to insert comment into database
    $sql = "INSERT INTO comments (username, comment, szekcio) VALUES ('$username', '$comment', '$szekcio')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the index page
        header("Location: ../index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
}else{
    session_destroy();
    header('Location: ../up.php');
}
?>