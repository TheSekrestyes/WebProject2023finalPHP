<?php
    require_once '../navbar.php';
    include "../classes/User.php";
    include "../fileIO.php";
    session_start();

    if (!isset($_SESSION["user"])) {
        header("Location: login.php");
    }
    $user = $_SESSION["user"];

    $users = loadData("../adatok/users.txt");
    $errors = [];
    if(isset($_POST["editBtn"])) {
        $newUser = $_POST["username"];
        $originalUser = $_SESSION["user"] -> getUsername();
        $password = $_POST["pw"];
        $password2 = $_POST["pw2"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        
        if($email === ""){
             $errors[] = "Adjon meg email címet!";
        }
        if ($newUser === "") {
            $errors[] = "Adjon meg felhasználónevet!";
        }
        if($gender === ""){
            $errors[] = "Adja meg a nemét!";
        }

        if(count($errors) === 0){
            if($newUser !== $_SESSION["user"] -> getUsername()) {
                $_SESSION["user"] -> setUsername($newUser);
            }
            if($email !== $_SESSION["user"] -> getEmail()){
                if(preg_match("/[0-9a-z\.\-]+@([0-9a-z\-]+\.)[a-z]{1,5}/", $email)){
                    $_SESSION["user"] -> setEmail($email);
                }
                else{
                    $errors[] = "A megadott e-mail cím nem megfelelő!";
                }
            }
            if($gender !== $_SESSION["user"] -> getGender()){
                $_SESSION["user"] -> setGender($gender);
            }
            if($password !== ""){
                if (strlen($password) < 6) {
                    $errors[] = "A jelszónak legalább 6 karaktert kell tartalmaznia!";
                }
                if (!(preg_match("/[A-Za-z]/", $password) && preg_match("/[0-9]/", $password))) {
                    $errors[] = "A jelszónak tartalmaznia kell betűt és számot is!";
                }
                if (!preg_match("/[0-9a-z\.\-]+@([0-9a-z\-]+\.)[a-z]{1,5}/", $email)) {
                    $errors[] = "A megadott e-mail cím nem megfelelő!";
                }
                if($password !== $password2){
                    $errors[] = "A megadott jelszavak nem egyeznek!";
                }
                if(count($errors) === 0){
                    if($password!=="" && $password===$password2){
                        $_SESSION["user"]->setPw(password_hash($password, PASSWORD_DEFAULT));
                    }
                }
            }
            $newUsers = [];
            foreach($users as $user){
                if($user -> getUsername() === $originalUser){
                    $newUsers[] = $_SESSION["user"];
                }
                else{
                    $newUsers[] = $user;
                }
            }
            saveData("../adatok/users.txt", $newUsers);
        }
        if(count($errors) > 0){
            echo "<div class='result'> ";
            for ($i= 0; $i < sizeof($errors); $i++) { 
                echo "<p>".$errors[$i]."</p>";
            }
            echo "</div>";
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
    <?php navBar('profile') ?>

    <div class="content">
        <div class="form">
            <form method="POST">
            <table class="profileTable">
                <tr>
                    <th colspan="2">Profil adatok</th>
                </tr>
                <tr>
                    <th>Felhasználónév: </th>
                    <td>
                            <input type="text" class="edit" name="username" id="username" value='<?php echo $user->getUsername();?>'>
                    </td>
                </tr>
                <tr>
                    <th>Email cím: </th>
                    <td>
                            <input type="text" class="edit" name="email" id="email" value='<?php echo $user->getEmail();?>'>
                    </td>
                </tr>
                <tr>
                    <th>Nem: </th>
                    <td>
                            <input type="text" class="edit" name="gender" id="gender" value='<?php echo $user->getGender();?>'>
                    </td>
                </tr>
                <tr>
                    <th>Jelszó: </th>
                    <td>
                            <input type="password" class="edit" name="pw" id="pw" placeholder="Adja meg az új jelszót!" minlength="6">
                    </td>
                </tr>
                <tr>
                    <th>Jelszó megerősítése: </th>
                    <td>
                            <input type="password" class="edit" name="pw2" id="pw2" placeholder="Erősítse meg a jelszót!"  minlength="6">
                    </td>
                </tr>
                <div class="profileBtn">
                    <input type="submit" value="Adatok mentése" name="editBtn">
                </div>
            </table>
            </form>
            <div class="profileBtn">
                    <form action="../logout.php" method="POST">
                        <input type="submit" value="Kijelentkezés" name="logoutBtn">
                    </form>
                    <form action="../deleteProfile.php" method="POST">
                        <input type="submit" value="Profil törlése" name="deleteBtn">
                    </form>
            </div>
            
        </div>
    </div>

    <footer>
        <p class="elerhetosegek">Elérhetőségek: e-mail: minta@minta.hu, telefon: +36 12 345 6789, cím: Szeged, Minta utca, 6724</p>
    </footer>
</body>
</html>