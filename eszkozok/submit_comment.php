<?php
session_start();
if (isset($_SESSION['username'])) {
    if(isset($_SESSION['szekcio'])){
        $szekcio = $_SESSION['szekcio'];
        switch ($szekcio){
           case "wot":
               $url="wotism.php";
               break;
            case "lol":
                $url="lolism.php";
                break;
            case "minecraft":
                $url="mcism.php";
                break;
            default:
                $url="index.php";
                break;
        }
    }
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
        $creatat = date("Y/m/d");

        // Prepare SQL statement to insert comment into database
        $sql = "INSERT INTO comments (username, comment, created_at, szekcio) VALUES ('$username', '$comment', '$creatat','$szekcio')";

        if ($conn->query($sql) === TRUE) {
            // Redirect back to the index page
            header("Location: ../".$url);
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