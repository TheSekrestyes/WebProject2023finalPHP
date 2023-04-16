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
            <div class="card card-1">
                <div class="card-content">
                    <table class="table">
                        <tr>
                            <th>Név:</th>
                            <td>Ivanov</td>
                        </tr>
                        <tr>
                            <th>Nem:</th>
                            <td>Kan</td>
                        </tr>
                        <tr>
                            <th>Született:</th>
                            <td>2021.02.01.</td>
                        </tr>
                        <tr>
                            <th>Bekerült:</th>
                            <td>2023.02.14.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card card-2">
                <div class="card-content">
                    <table class="table">
                        <tr>
                            <th>Név:</th>
                            <td>Mirabella</td>
                        </tr>
                        <tr>
                            <th>Nem:</th>
                            <td>Szuka</td>
                        </tr>
                        <tr>
                            <th>Született:</th>
                            <td>2019.09.15.</td>
                        </tr>
                        <tr>
                            <th>Bekerült:</th>
                            <td>2023.02.09.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card card-3">
                <div class="card-content">
                    <table class="table">
                        <tr>
                            <th>Név:</th>
                            <td>Cédrus</td>
                        </tr>
                        <tr>
                            <th>Nem:</th>
                            <td>Szuka</td>
                        </tr>
                        <tr>
                            <th>Született:</th>
                            <td>2018.01.01.</td>
                        </tr>
                        <tr>
                            <th>Bekerült:</th>
                            <td>2023.01.21.</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card card-4">
                <div class="card-content">
                    <table class="table">
                        <tr>
                            <th>Név:</th>
                            <td>Kelly</td>
                        </tr>
                        <tr>
                            <th>Nem:</th>
                            <td>Szuka</td>
                        </tr>
                        <tr>
                            <th>Született:</th>
                            <td>2021.06.01.</td>
                        </tr>
                        <tr>
                            <th>Bekerült:</th>
                            <td>2022.12.31.</td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>


    <footer>
        <p class="elerhetosegek">Elérhetőségek: e-mail: minta@minta.hu, telefon: +36 12 345 6789, cím: Szeged, Minta utca, 6724</p>
    </footer>
</body>
</html>