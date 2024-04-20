<?php
session_start();
$_SESSION['szekcio']="wot";
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
    <title>World of Tanks</title>
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
            <h1 class="cim">A World of Tanks - ről</h1>
        </div>
    </div>
    <img src="kepek/wotkep2.jpg" style="float:right;width: 350px;height: 350px;border-radius: 50%" class="kep">
    <img src="kepek/wotkep1.jpg" style="float: left;width: 350px;height: 350px;border-radius: 50%" class="kep">
    <p class="aszov">A World of Tanks egy 3D-s csapatalapú többjátékos freemium videójáték, amelyben az 1910-es és 1970-es évek közötti páncélozott harcjárművek harcait szimulálják. A játék PvP alapú, vagyis a játékosok egymással harcolnak benne. A kiadott változatban 94 amerikai, 130 szovjet, 119 német, 78 brit, 75 francia, 42 kínai, 12 cseh, 29 svéd, 26 japán, 12 olasz harcjármű és 12 lengyel harcjármű, amelyeket könnyű, közepes és nehéz harckocsikra, páncélvadászokra és önjáró lövegekre osztottak fel. Összesen 500 tankot vehetünk az irányításunk alá. A járművek külsőre történelmileg hű másai a valódiaknak (habár vannak fantázia tankok amelyet kis valósággal ötvöztek), de mivel a játék nem egy tankszimulátor, így bizonyos értékeket (például a páncélátütés fizikája) egyszerűsítettek és a játékbeli irányítást kiegyenlítették.</p>
    <h2>Comments</h2>
    <h2>Leave a Comment</h2>
    <?php
    if (isset($_SESSION['username'])){


        ?>
        <form action="eszkozok/submit_comment.php" method="post">

            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Submit">
        </form>

        <hr>

        <h2>Comments</h2>
        <div id="comments">
            <?php include 'eszkozok/load_comments.php'; ?>
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