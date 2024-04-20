<!DOCTYPE html>
<html lang="HU-hu">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
<form action="eszkozok/ppl.php" method="post">
    <div class="container">
        <h1>Regisztrálás</h1>
        <p>Kérem töltse ki ezt az adatlapot.</p>
        <hr>
        <label for="felh" id="valamo"><b>Felhasznalo nev</b></label>
        <br>
        <input type="text" name="felh" id="felh" required readonly>
        <br>
        <br>
        <label for="pass"><b>Jelszo</b></label>
        <br>
        <input type="text" name="pass" id="pass" required readonly>
        <br>
        <br>
        <label for="email"><b>Email</b></label>
        <br>
        <input type="text" placeholder="Írja be az Email címét" name="email" id="email" required>
        <br>
        <br>
        <label for="psw"><b>Életkora</b></label>
        <br>
        <input type="text" placeholder="Írja be az életkorát" name="psw" id="psw" required>
        <br>
        <br>
        <label for="nem"><b>Nem:</b></label><br>
        <select name="nem" id="nem" required>
            <option value="ferfi">Férfi</option>
            <option value="no">Nő</option>
        </select>
        <br>
        <br>
        <label for="telf"><b>Telefonszam:</b></label><br>
        <input type="text" name="telf" size="9" id="telf" placeholder="Tel. szam" required>
        <hr>

        <p>Azzal hogy készítesz egy felhasználói profilt beleegyezel a <a href="#">Terms & Privacy</a>-ba.</p>

        <a href="index.php" type="submit" class="registerbtn" onclick="f()">Regisztrálás</button></a>
    </div>
</form>
<script>
    const felha = localStorage.getItem('felh');
    const pass = localStorage.getItem('pass');


    document.getElementById('felh').value = felha;
    document.getElementById('pass').value = pass;
    function f(){
        localStorage.setItem('loggedin', '1');
    }
</script>
</body>
</html>
