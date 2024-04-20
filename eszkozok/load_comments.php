<?php

if (isset($_SESSION['username'])) {


    $szekcio = $_SESSION['szekcio'];
// Establish connection to MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "comment_section_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

// Retrieve comments from database
    $sql = "SELECT username, comment, created_at FROM comments WHERE szekcio='" . $szekcio . "' ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
            echo "<div class='comment'><strong>Username:</strong> " . $row["username"] . "<br><strong>Comment:</strong> " . $row["comment"] . "<br><strong>Date:</strong> " . $row["created_at"] . "</div>";
        }
    } else {
        echo "No comments yet.";
    }

    $conn->close();
}else{
    session_destroy();
    header('Location: ../up.php');
}
?>