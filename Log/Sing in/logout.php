<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body onload="update()">
    <h1><b>Profil adatok</b></h1>
    <form action="adat.php" method="post">
        <label for="felh"><b>Felhasznalonev:</b></label><br>
        <input name="felh" id="felh" readonly><br>
        <br><br>
    </form>
    <div id="comments">
        <?php include 'adat.php'; ?>
    </div>
    <a href="kezd.php" onclick="c()">Kijelentkezes</a>

    <script>
        function c(){
            const loggedin = 0;
            localStorage.setItem('loggedin',loggedin);
            localStorage.setItem('felh','')
        }
        function update(){
            const fuuuu = localStorage.getItem('felh');
            document.getElementById('felh').value=fuuuu;
        }
    </script>
</body>
</html>
