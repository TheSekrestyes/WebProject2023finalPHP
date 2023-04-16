<?php
    include_once "classes/User.php";
    include_once "fileIO.php";
    session_start();

    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }

    $users = loadData("adatok/users.txt");
    $newUser = [];
    foreach ($users as $user){
        if($user->getUsername() !== $_SESSION["user"]->getUsername()){
            $newUser[] = $user;
        }
    }
    saveData("adatok/users.txt", $newUser);
    header("Location: logout.php");
?>