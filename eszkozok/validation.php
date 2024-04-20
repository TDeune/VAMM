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
    $sql="SELECT * FROM `users` WHERE `username`='".$username."' AND `password`='".$password."'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)==1){
        $userdata=mysqli_fetch_array($result);
        $_SESSION['username']=$username;
        $_SESSION['email']=$userdata['email'];
        $_SESSION['teljesnev']=$userdata['teljesnev'];
        $_SESSION['lakcim']=$userdata['lakcim'];

        header('Location: ../index.php');
        exit();
    }else {

        $_SESSION['error']="hibas felhasznalo nev vagy jelszo";
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