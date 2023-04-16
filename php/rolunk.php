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
    
    <?php navBar('rolunk') ?>

    <div class="content">
        <article class="tartalom">
            <h2 id="titleH2">Pár információ tevékenységeinkről!</h2>
            <div class="szoveg">
                <p>Célunk, hogy segítsünk az állatbarátoknak megtalálni a legjobb otthont a rászoruló kutyáknak. A kutyamenhelyünkben számos különböző fajta és korú kutya várja az örökbefogadóikat. Minden kutyánk alapos egészségügyi vizsgálaton esik át, mielőtt bekerül a menhelyre, így biztosak lehetünk abban, hogy új otthonába egészségesen és boldogan fog kerülni.</p>
            </div>
            <div class="szoveg">
                <p>Az örökbefogadás mellett a kutyamenhelyünk számos más módon is segíti a kutyák életét. Rendszeresen szervezünk oltási napokat és állatorvosi ellenőrzéseket, hogy biztosítsuk az állatok egészségét és jólétét. Emellett kutyák számára rehabilitációs programokat és foglalkozásokat is szervezünk, amelyek segítenek az állatoknak visszanyerni a bizalmat és a boldogságot.</p>
            </div>
            <div class="szoveg">
                <p>Bízunk benne, hogy megtalálja az ideális kutyát, aki új családtaggá válhat az Ön otthonában. Ha további kérdései vannak, vagy érdeklődik az önkéntes munkával kapcsolatban, kérjük, lépjen velünk kapcsolatba.</p>
            </div>
            <video controls>
                <source src="../videos/dogs.mp4" type="video/mp4">
              </video>
        </article>
    </div>
    
    <footer>
        <p class="elerhetosegek">Elérhetőségek: e-mail: minta@minta.hu, telefon: +36 12 345 6789, cím: Szeged, Minta utca, 6724</p>
    </footer>
</body>
</html>