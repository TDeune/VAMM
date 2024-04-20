<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
    <link rel="icon" type="image/x-icon" href="kepek/diamonds-smile.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="image">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars" style="font-size: xxx-large;" ></i></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="index.php">Home</a>
                <a href="about.html">About</a>
                <a href="up.html">Profile</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="login-box">
        <div class="row">
        <div class="col-md-6 login-left">
            <h2>Login here</h2>
            <form action="eszkozok/validation.php" method="post">
                <div class="form-group">
                    <label>Felhasználónév</label>
                    <input type="text" id="uaser" name="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jelszó</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <br>
                <input type="submit" value="login">
                <br>
                <?php
                    if (isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?>
            </form>
        </div>
        <div class="col-md-6 login-right">
            <h2>Register here</h2>
            <form>
                <div class="form-group">
                    <label>Felhasználónév</label>
                    <input type="text" id="user" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jelszó</label>
                    <input type="password" id="password" class="form-control" required>
                </div>
                <br>
                <a href="regi.php" type="submit" class="btn btn-primary"> Register </a>
            </form>
        </div>
        </div>
        </div>
    </div>
    <script>
        function update() {
            const vserr1 = document.getElementById('uaser').value;
            const vserr = document.getElementById('user').value;
            if(vserr1 !== ''){
                localStorage.removeItem('loggedin');
                localStorage.setItem('loggedin','1');
            }
            if(vserr !== ''){
                localStorage.removeItem('loggedin');
                localStorage.setItem('loggedin','1');
            }
            const passw = document.getElementById('password').value;
            localStorage.setItem('felh', vserr+vserr1);
            localStorage.setItem('pass', passw);
        }
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