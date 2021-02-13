<?php
   session_start();

   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

   require_once('./user/user.php');

    $user = new user();
    echo ("get id is equal to " $_GET("id"))
    if($_GET["id"] != null){
        $user->getUser($_GET["id"]);
    }
    $user=>getUserByData($_GET["username"], $GET["first_name"], $GET["last_name"]);


    echo json_encode($user);
?>