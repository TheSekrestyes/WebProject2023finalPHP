<?php
    function navBar(string $current){
            echo '<nav class="navbar">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
               <i class="fül">&#8801;</i>
            </label>
            <ul>
               <li class="'.($current === "index" ? "active" : "") .'"><a href="index.php">Kezdőlap</a></li>
               <li>
                   <div class="dropdown '.($current === "kutya" ? "active" : "") .'">
                       <div class="dropbtn">Kutyáink
                           <div class="dropdown-content">
                               <a href="gazdaraVaroKutyaink.php">Gazdára váró kutyáink</a>
                               <a href="gazdaraTalaltKutyaink.php">Gazdára talált kutyáink</a>
                           </div>
                       </div>
                   </div>
               </li>
               <li class="'.($current === "orokbefogadas" ? "active" : "") .'"> <a href="orokbefogadasrol.php">Örökbefogadásról</a></li>
               <li class="'.($current === "rolunk" ? "active" : "") .'"> <a href="rolunk.php">Rólunk</a></li>';
               if(!isset($_SESSION["user"])) {
                    echo '<li class="'.($current === "login" ? "active" : "") .'"> <a href="login.php">Bejelentkezés</a></li>';
               }
               else{
                    echo '<li class="'.($current === "profile" ? "active" : "") .'"> <a href="profile.php">Profil</a></li>';
               }
            echo '</ul>
                <span class="cim">Boldog Blökik Állatmenhely</span>
                <img class="icon" src="../img/logo.png" alt="logo">
                </nav>';
    }
?>