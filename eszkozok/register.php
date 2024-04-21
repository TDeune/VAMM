<?php
session_start();
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

if (isset($_POST['user']) && isset($_POST['password']))
{
    $username=$_POST['user'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `users` WHERE `username`='".$username."'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)==0){
        $sql="INSERT INTO `users`(`username`,`password`) VALUES ('".$username."','".$password."')";
        $result=mysqli_query($conn,$sql);
        $_SESSION['register_error']="sikeres regisztracio. Most mar belephetsz";

        header('Location: ../up.php');
        exit();
    }else {

        $_SESSION['register_error']="mar letezik a felhasznalo";
        header('Location: ../up.php');
        exit();
    }
}else
{
    header('Location: ../up.php');
    exit();
}
$conn->close();
?>