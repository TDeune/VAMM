<?php
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
$sql = "SELECT email, comment, created_at FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p><strong>Username:</strong> " . $row["email"] . "<br><strong>Comment:</strong> " . $row["comment"] . "<br><strong>Date:</strong> " . $row["created_at"] . "</p>";
    }
} else {
    echo "No comments yet.";
}

$conn->close();
?>