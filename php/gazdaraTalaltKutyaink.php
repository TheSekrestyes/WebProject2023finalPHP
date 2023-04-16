<?php
    require_once '../navbar.php';
    include "../classes/User.php";
    session_start();
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
    <?php navBar('kutya') ?>
   
    <div id="nyomtatasJog"><h1>A kutyák nyomtatása szerzői jogok miatt letiltva</h1></div>
  
    <div class="dog-container">
        <div class="row-dog">
            <div class="card card-5">
                <div class="card-content">
                    <table class="table">
                        <tr>
                            <th>Név:</th>
                            <td>Kamélia</td>
                        </tr>
                        <tr>
                            <th>Nem:</th>
                            <td>Szuka</td>
                        </tr>
                        <tr>
                            <th>Született:</th>
                            <td>2019.01.01.</td>
                        </tr>
                        <tr>
                            <th>Bekerült:</th>
                            <td>2022.11.29.</td>
                        </tr>
                        <tr>
                            <th>Hazavitték:</th>
                            <td>2023.01.18.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card card-6">
                <div class="card-content">
                    <table class="table">
                        <tr>
                            <th>Név:</th>
                            <td>Piskóta</td>
                        </tr>
                        <tr>
                            <th>Nem:</th>
                            <td>Kan</td>
                        </tr>
                        <tr>
                            <th>Született:</th>
                            <td>2022.04.28.</td>
                        </tr>
                        <tr>
                            <th>Bekerült:</th>
                            <td>2023.01.05.</td>
                        </tr>
                        <tr>
                            <th>Hazavitték:</th>
                            <td>2023.03.06.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p class="elerhetosegek">Elérhetőségek: e-mail: minta@minta.hu, telefon: +36 12 345 6789, cím: Szeged, Minta utca, 6724</p>
    </footer>
</body>
</html>