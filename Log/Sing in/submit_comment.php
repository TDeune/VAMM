<?php
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
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Prepare SQL statement to insert comment into database
    $sql = "INSERT INTO comments (email, comment) VALUES ('$email', '$comment')";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the index page
        header("Location: kezd.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>