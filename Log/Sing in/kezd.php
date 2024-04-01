<?php
session_start();
if(isset($_SESSION['username'])){
    $profillink="profil.php";
}else{
    $profillink="up.php";
}
?>
<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <title>Kezdőoldal</title>
    <link rel="icon" type="image/x-icon" href="diamonds-smile.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="contain">
        <div class="image">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size: xxx-large;"></i></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="kezd.php">Home</a>
                    <a href="about.html">About</a>
                    <a id="bej" href="<?php echo $profillink;?>">Profile</a>
                </div>
            </div>
        </div>
        <div class="text">
            <h1 class="cim"> YNTK </h1>
        </div>
    </div>
    <h2 class="cim2"> YOU NEED TO KNOW </h2>
    <p class="szoveg"> A YNTK egy gyönyörü játékbemutató oldal mely által megismerhetsz számos hires és izgalmas játékot,ekszklúziv hireket,újdonságokat,és sok mást!   </p>
    <div  class ="row1">
        <div class="column">
            <img src="lolicon.png" alt="League of Legends" title="League of Legends" style="width: 300px;height: 300px">
        </div>
        <div class="column">
            <img src="World-of-Tanks-emblem.png" alt="World of Tanks" title="World of Tanks" style="width: 450px;height: 300px">
        </div>
        <div class="column">
            <img src="avjal33hpqo61.png" alt="Minecraft" title="Minecraft" style="width: 260px;height: 260px">
        </div>
    </div>
    <div class="row1">
        <div class="column"><a href="lolism.html">LEAGUE OF LEGENDS</a></div>
        <div class="column"><a href="wotism.html">WORLD OF TANKS</a></div>
        <div class="column"><a href="mcism.html">MINECRAFT</a></div>
    </div>

    <h2>Leave a Comment</h2>
    <form action="submit_comment.php" method="post">

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>

    <hr>

    <h2>Comments</h2>
    <div id="comments">
        <?php include 'load_comments.php'; ?>
    </div>

    <script>
        /*function f1() {
            localStorage.setItem('loggedin', '0')
        }*/

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
        setInterval("update()",1000);

    </script>
</body>
</html>