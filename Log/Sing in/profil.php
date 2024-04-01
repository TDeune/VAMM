<?php
session_start();
if (isset($_SESSION['username'])) {


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
            echo "felhasznalonev: ".$_SESSION['username'];
            echo "<br>";
            echo "email: ".$_SESSION['email'];
            echo "<br>";
            ?>
            <form action="logout.php" method="post">
                <input type="submit" value="logout">
            </form>


        <?php


    } else {
        header('Location: up.php');
        exit();
    }
    $conn->close();

?>