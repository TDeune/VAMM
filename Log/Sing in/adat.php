<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$felh = 'TD';

$query = "SELECT * FROM user WHERE email='$felh'";
$query_run = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($query_run)){
    echo"<b>Email:</b><br>";
    echo $row['felhnev'];
    echo "<br><br>";
    echo"<b>Eletkor:</b><br>";
    echo $row['eletkor'];
    echo "<br><br>";
    echo"<b>Telefonszam:</b><br>";
    echo $row['telefonsz'];
    echo "<br><br>";
    echo"<b>Nem:</b><br>";
    echo $row['nem'];
    echo "<br><br>";
}
?>