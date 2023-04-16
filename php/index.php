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
    <?php navBar("index") ?>
    
    <div class="content">
        <h1 class="title">Üdvözöljük a Boldog Blökik Állatmenhely weboldalán!</h1>
        <div id="slider">
        <figure>
                <img src="../img/sliderDog1.png" alt="Kutya 1" title="Kutya 1">
                <img src="../img/sliderDog2.jpg" alt="Kutya 2" title="Kutya 2">
                <img src="../img/sliderDog3.jpg" alt="Kutya 3" title="Kutya 3">
        </figure>
      </div>

      <div class="row">
        <div class="news">
            <div class="news-content">
                Kedves Kutya Barátok! Örömmel hívjuk Önöket kutyasimogató rendezvényünkre!  Az esemény célja, hogy segítsünk a kutyáink számára a gazdák találását. Szeretettel várunk mindenkit, aki szeretne kedveskedni a kutyáinknak. Élvezhetik a kutyák biztonságos környezetét, ahol sétálhatnak a kutya mentők vezetésével, hogy megismerkedhessenek a kutyáinkkal.
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                "Adj otthont egy kiskutyának!" Kutyáink várják, hogy megtalálják az örök otthonukat. Látogass el hozzánk, hogy megtaláld a tökéletes társat. Lépj velünk kapcsolatba, hogy megtudjuk, hogyan segíthetünk a kiskutyákon!
            </div>
        </div>
        <div class="news">
            <div class="news-content">       
                Közösen ünnepelhetünk a gyereknapot a kutyamenhelyen! Gyere el a helyszínre és csatlakozz a játékokhoz, kézműveskedéshez és kutyás programokhoz, amiket az önkéntesek számára rendezünk. Családok, barátok, ismerősök és kutyák is közösen ünnepelhetnek velünk. Várunk mindenkit szeretettel!
            </div>
        </div>
    </div>
    <div class="row">
        <div class="news">
            <div class="news-content">
                Támogasson minket adója 1%-val és segítsen, hogy az állatok mindennapi életét szebbé tehessük!
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                Közösen ünnepeljük meg a kutyák szeretetét és támogatását! Gyere el a következő ingyenes kutyaoltás rendezvényünkre. Együtt segíthetünk a kutyák egészségének megőrzésében. A rendezvényen ingyenes oltásokat, egészségügyi ellenőrzéseket és szűrővizsgálatokat biztosítunk. Szeretettel várunk mindenkit, aki szeretné támogatni a kutyákat!
            </div>
        </div>
        <div class="news">
            <div class="news-content">
                "Új kapcsolatok a kiskutyákkal!" Fedezd fel velünk a kiskutyák szeretetét. Ismerd meg a kutyákat, akik egy örök otthont keresnek. Látogass el hozzánk, hogy megtaláld a tökéletes társat. Mindemellett vegyél részt a kiskutyák gondozásában és felelős állattartásban. Segíts nekik, hogy megtalálják végleges otthonukat.
            </div>
        </div>
    </div>
    </div> 

    <footer>
        <p class="elerhetosegek">Elérhetőségeink: e-mail: minta@minta.hu, telefon: +36 12 345 6789, cím: 6724 Szeged, Minta utca 1.</p>
    </footer>
</body>
</html>