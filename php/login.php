<?php
    require_once '../navbar.php';
    include '../classes/User.php';
    include '../fileIO.php';
    session_start();

    $users = loadData("../adatok/users.txt");
    $errors = [];

    if(isset($_POST["btn"])){
        $email = $_POST["email"];
        $password = $_POST["pw"];

        foreach ($users as $user){
            if($user->getEmail() === $email && password_verify($password, $user->getPw())){
                $_SESSION["user"] = $user;
                break;
            }
        }
        if(!isset($_SESSION["user"])){
            $errors[] = "Hibás email cím vagy jelszó!";
        }
    }
    if(isset($_SESSION["user"])){
        header("Location: profile.php?result=true");
    }
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/style.css">
    <title>Boldog Blökik Állatmenhely</title>
</head>
<body>
    <?php navBar('login') ?>

    <div class="content">
        <?php
            if(count($errors) > 0){
                echo "<div class='result'> ";
                for ($i= 0; $i < sizeof($errors); $i++) { 
                    echo "<p>".$errors[$i]."</p>";
                }
                echo "</div>";
            }
            if (isset($_GET["result"]) && !isset($_POST["btn"])) {
                echo "<div class='result'>Sikeres regisztráció!</div>";
            }
        ?>
        <form method="POST">
            <div class="form">
                <div>
                    <label for="email">Email cím:</label><br>
                    <input type="email" name="email" id="email" placeholder="Email cím"><br>
                    <label for="pw">Jelszó:</label><br>
                    <input type="password" name="pw" id="pw" placeholder="Jelszó"><br>
                    <input type="submit" name="btn" id="btn" value="Bejelentkezés">
                </div>
                <div class="register">
                    <a href="register.php">Regisztráció</a>
                </div>
            </div>
        </form>
    </div>


    <footer>
        <p class="elerhetosegek">Elérhetőségek: e-mail: minta@minta.hu, telefon: +36 12 345 6789, cím: Szeged, Minta utca, 6724</p>
    </footer>
</body>
</html>