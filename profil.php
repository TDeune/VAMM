<?php
session_start();
if (isset($_SESSION['username'])) {
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
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size: xxx-large;" ></i></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="up.php">Profile</a>
            </div>
        </div>
    </div>
    <div class="text">
        <h1 class="cim">A Leauge of Legends - ről</h1>
    </div>
</div>
<div class="content_profil">
<h1>
    Profil
</h1>
<?php
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
            echo "felhasznalonev: ".$_SESSION['username'];
            echo "<br>";
            echo "email: ".$_SESSION['email'];
            echo "<br>";
            echo "<form action='eszkozok/update.php' method='post'>";
            echo "<p class='form_label'>teljes nev:</p><input type='text' class='form_input_text_short' name='teljesnev' value='".$_SESSION['teljesnev']."'>";
            echo "<br>";
            echo "<p class='form_label'>lakcim:</p><input type='text' name='lakcim' class='form_input_text_short' value='".$_SESSION['lakcim']."'>";
            echo "<br>";
            echo "<p class='form_label'>email:</p><input type='text' name='email' class='form_input_text_short' value='".$_SESSION['email']."'>";
            echo "<br>";
            echo "<input type='submit'  class='btn btn-primary' value='adatok mentese'>";
            echo "<br>";
            if (isset($_SESSION['update_error'])) {
                echo $_SESSION['update_error'];
                unset($_SESSION['update_error']);
            }

            echo "</form>";
            echo "<br>";
            ?>
            <form action="eszkozok/logout.php" method="post">
                <input type="submit"  class="btn btn-primary" value="logout">
            </form>
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


<?php
    } else {
        header('Location: up.php');
        exit();
    }
    $conn->close();

?>