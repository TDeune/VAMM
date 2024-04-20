<?php
session_start();
$_SESSION['szekcio']="minecraft";
if(isset($_SESSION['username'])){
    $profillink="profil.php";
}else{
    $profillink="up.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Minecraft</title>
    <link rel="icon" type="image/x-icon" href="kepek/diamonds-smile.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="contain">
        <div class="image">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size: xxx-large;"></i></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="index.php">Home</a>
                    <a href="about.html">About</a>
                    <a href="up.php">Profile</a>
                </div>
            </div>
        </div>
        <div class="text">
            <h1 class="cim">A Minecrat - ról</h1>
        </div>
    </div>
    <img src="kepek/mckep2.jpg" style="float:right;width: 350px;height: 350px;border-radius: 50%" class="kep">
    <img src="kepek/mckep1.jpg" style="float: left;width: 350px;height: 350px;border-radius: 50%" class="kep">
    <p class="aszov">A Minecraft nyílt világú sandbox videójáték, melyet a svéd Markus Persson indított útjára 2009-ben, és a Mojang adott ki 2011-ben. 2014-ben a Microsoft felvásárolta a játék fejlesztésével és kiadásával foglalkozó céget, ezzel együtt birtokukba került a Minecraft tulajdonjoga is. A Minecraft minden idők legkelendőbb játéka. 2023 októberére 300 millió példányt adtak el belőle valamennyi platformon, továbbá havi szinten 126 millió aktív játékossal rendelkezik. A Minecraftban a játékosok egy blokkokból álló, pixeles, 3D világot fedezhetnek fel, felhasználhatják annak a nyersanyagait, eszközöket készíthetnek, építményeket építhetnek, továbbá a játék módjától függően harcolhatnak számítógép vezérelte ellenségekkel, vagy akár együttműködhetnek más játékosokkal.</p>
    <h2>Comments</h2>
    <h2>Leave a Comment</h2>
    <?php
    if (isset($_SESSION['username'])){


        ?>
<<<<<<<< HEAD:mcism.php
        <form action="eszkozok/submit_comment.php" method="post">
========
        <form action="submit_comment.php" method="post">
>>>>>>>> origin/main:kepek/mcism.php

            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Submit">
        </form>

        <hr>

        <h2>Comments</h2>
        <div id="comments">
<<<<<<<< HEAD:mcism.php
            <?php include 'eszkozok/load_comments.php'; ?>
========
            <?php include 'load_comments.php'; ?>
>>>>>>>> origin/main:kepek/mcism.php
        </div>
        <?php
    }else{
        echo "<br>";
        echo "a komment szekciot csak bejelentkezessel lehet elerni!";
    }
    ?>
    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }
        window.onclick = function(event) {
            var dropdowns;
            var i;
            var openDropdown;
            if (!event.target.matches('.dropbtn')) {
                dropdowns = document.getElementsByClassName("dropdown-content");
                for (i = 0; i < dropdowns.length; i++) {
                    openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

    </script>
</body>
</html>