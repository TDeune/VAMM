<?php
session_start();
$_SESSION['szekcio']="lol";
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
    <title>Leauge of Legends</title>
    <link rel="icon" type="image/x-icon" href="kepek/diamonds-smile.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="contain">
        <div class="image">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size: xxx-large;" ></i></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="index.php">Home</a>
                    <a href="about.html">About</a>
                    <a href="up.php">Profile</a>
                </div>
            </div>
        </div>
        <div class="text">
            <h1 class="cim">A Leauge of Legends - ről</h1>
        </div>
    </div>


    <img src="kepek/lolkep1.jpg" style="float:right;width: 300px;height: 300px;border-radius: 50%" class="kep">
    <img src="kepek/lolkep2.jpg" style="float: left;width: 300px;height: 300px;;border-radius: 50%" class="kep">
    <p class="aszov">A játékos regisztráció után az úgynevezett láthatatlan "Idéző" szerepébe bújik, aki egy egyedülálló mágikus képességekkel rendelkező hőst tud irányítani akinek célja, hogy csapattársai segítségével legyőzze az ellenfél csapatot. A két különböző pályán a játékosok két egyenlő, 5 fős csapatokra oszlanak, mindenki egy általa vagy véletlenszerűen választott hőst irányítva. A csapatok a térkép két átellenes pontján kezdenek egy Érkező Medence (Spawn Pool) nevű helyen, a Nexus (főközpont, szó szerint: összeköttetés) mellett. Az ellenfél Nexusának elpusztításával lehet megnyerni a játékot, vagy ha az ellenfél csapata feladja.
        A hősök a játék során folyamatosan tapasztalatot és aranyat gyűjtenek, ellenséges lények (hősök és minionok) illetve semleges szörnyetegek legyilkolásával, valamint tornyok és inhibitorok lerombolásával. Az aranyból különféle tárgyakat vehetnek, amelyek fokozzák a hatékonyságukat, képességeik erejét, vagy éppen védelmet adnak. Első szinten kezdenek és a 18. szintig fejlődhetnek minden játék alkalmával, míg az Idézői szint, folyamatosan növekszik.</p>
    <div class="comment_section">

    <h2>Leave a Comment</h2>
    <?php
    if (isset($_SESSION['username'])){


        ?>
        <div class="sumbit_comment_block">
        <form action="eszkozok/submit_comment.php" method="post">

            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
        </div>
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
    </div>
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