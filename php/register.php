<?php
    require_once '../navbar.php';
    include '../classes/User.php';
    include '../fileIO.php';
    session_start();

    $users = loadData("../adatok/users.txt");
    $errors = [];

    if(isset($_POST["btnReg"])){
        $username = $_POST["nicknameReg"];
        $password = $_POST["pwReg"];
        $email = $_POST["emailReg"];
        $gender = "egyeb";

    if(isset($_POST["gender"])){
        $gender = $_POST["gender"];
    }

    //vizsgálatok
    if (trim($username) === "" || trim($password) === "" || trim($email) === "") {
        $errors[] = "Minden mezőt ki kell tölteni!";
    }
    if (strlen($password) < 6) {
        $errors[] = "A jelszónak legalább 6 karaktert kell tartalmaznia!";
    }
    if (!(preg_match("/[A-Za-z]/", $password) && preg_match("/[0-9]/", $password))) {
        $errors[] = "A jelszónak tartalmaznia kell betűt és számot is!";
    }
    if (!preg_match("/[0-9a-z\.\-]+@([0-9a-z\-]+\.)[a-z]{1,5}/", $email)) {
        $errors[] = "A megadott e-mail cím nem megfelelő!";
    }
    if($password !== $_POST["pw2Reg"]){
        $errors[] = "A megadott jelszavak nem egyeznek!";
    }
    for($i = 0; $i < sizeof($users); $i++) { 
        if($users[$i] -> getEmail() === $email){
            $errors[] = "Ez az email cím már foglalt!";
        }
        if ($users[$i] -> getUsername() === $username) {
            $errors[] = "Ez a felhasználónév már foglalt!";
        }
    }

    if(count($errors) == 0){
        try{
            $newUser = new User($username,password_hash($password,PASSWORD_DEFAULT),$email,$gender);
                $users[] = $newUser;
                saveData("../adatok/users.txt", $users);
                header("Location: login.php?result=true");
        }
        catch(Exception $e){
            echo "Hiba!";
        }
    }
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
    <?php navBar('register') ?>
    <div class="content">
        <?php
            if(count($errors) > 0){
                echo "<div class='result'> ";
                for ($i= 0; $i < sizeof($errors); $i++) { 
                    echo "<p>".$errors[$i]."</p>";
                }
                echo "</div>";
            }
        ?>
        <form method="POST">
            <div class="form">
                <div>
                    <label for="nicknameReg">Felhasználónév:</label><br>
                        <input type="text" name="nicknameReg" id="nicknameReg" placeholder="Felhasználónév"><br>
                        <label for="emailReg">Email cím:</label><br>
                        <input type="email" name="emailReg" id="emailReg" placeholder="Email cím"><br>
                        <label for="pwReg">Jelszó:</label><br>
                        <input type="password" name="pwReg" id="pwReg" minlength="6" placeholder="Jelszó"><br>
                        <input type="password" name="pw2Reg" id="pw2Reg" minlength="6" placeholder="Jelszó megerősítése"><br>
                        <label>Neme:</label><br> 
                        <input type="radio" name="gender" id="gFerfi" value="Férfi"> <label for="gender-ferfi">Férfi</label>
                        <input type="radio" name="gender" id="gNo" value="Nő"> <label for="gender-no">Nő</label>
                        <input type="radio" name="gender" id="gEgyeb" value="Egyéb"> <label for="gender-egyeb">Egyéb</label><br>
                        <input type="submit" name="btnReg" id="btnReg" value="register">
                </div>
                <div class="register">
                    <a href="login.php">Bejelentkezés</a>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <p class="elerhetosegek">Elérhetőségek: e-mail: minta@minta.hu, telefon: +36 12 345 6789, cím: Szeged, Minta utca, 6724</p>
    </footer>
</body>
</html>