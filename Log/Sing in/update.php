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

    if (isset($_POST['teljesnev']) && isset($_POST['lakcim'])) {
        $teljesnev = $_POST['teljesnev'];
        $lakcim = $_POST['lakcim'];
        $username=$_SESSION['username'];
        $sql = "SELECT * FROM `users` WHERE `username`='" . $username . "'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $sql="UPDATE `users` SET `teljesnev`='".$teljesnev."', `lakcim`='".$lakcim."'  WHERE `username`='" . $username . "'";

            $_SESSION['teljesnev'] = $teljesnev;
            $_SESSION['lakcim'] = $lakcim;

            header('Location: profil.php');
            exit();
        } else {

            $_SESSION['error'] = "problema a felhasznalonevvel(nem egyedi vagy nem letezik)";
            header('Location: up.php');
            exit();
        }
    } else {
        $_SESSION['error'] = "minden mezot toltsd ki!";
        header('Location: profil.php');
        exit();
    }
    $conn->close();
}else{
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['teljesnev']);
    unset($_SESSION['lakcim']);
    header('Location: up.php');
}

?>