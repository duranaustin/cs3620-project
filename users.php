<?php
    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('./user/user.php');

    $user = new user();
    
    if(isset($_GET["id"])){
        $user->getUser($_GET["id"]);
    }
    if(isset($_GET["username"])){
         $user->getUserByUsername($_GET["username"]);
    }
    if(isset($_GET("firstname"))){
         $user->getUserByFirstName($_GET["firstname"]);
    }
    if(isset($_GET["lastname"])){
         $user->getUserByLastName($_GET["lastname"]);
    }

    echo json_encode($user);
?>