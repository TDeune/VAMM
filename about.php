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
    <title>Rólunk</title>
    <link rel="icon" type="image/x-icon" href="diamonds-smile.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="contain">
        <div class="image">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size: xxx-large;"></i></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="up.php">Profile</a>
                </div>
            </div>
        </div>
        <div class="text">
            <h1 class="cim">Rólunk</h1>
        </div>
    </div>
    <div  class ="row">
        <img class="kep10" src="kepek/idiot1.jpg" alt="hulye1" title="hulye1" style="margin-left: auto;margin-right: auto;border-radius: 50%">
        <img class="kep10" src="kepek/idiot2.jpg" alt="hulye2" title="hulye2" style="margin-left: auto;margin-right: auto;border-radius: 50%">
    </div>
    <div  class ="row">
        <p class="szoveg5" style="margin-left: auto;margin-right: auto"> Munk Márk </p>
        <p  class="szoveg5"  style="margin-left: auto;margin-right: auto"> Vanger Ákos</p>
    </div>
    <div  class ="row" style="width: 100%">
        <div style="width: 50%">
            <p class="szovegkis2" style="margin-left: auto;margin-right: auto"> "Az élet egy ringispil, mindig forgunk,<br>
                    néha lovon, néha kocsin, néha magunktól." </p>
        </div>
        <div style="width: 50%">
            <p  class="szovegkis2"  style="margin-left: auto;margin-right: auto"> "Turns out, codes do not get you hoes"</p>
        </div>
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