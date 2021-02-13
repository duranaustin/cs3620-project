<?php
   session_start();

   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

   require_once('./user/user.php');

    $user = new user();
    if($_GET["id"] != null){
    $user->getUser($_GET["id"]);
    }
    $user=>getUserByUsername($_GET["username"]);
    $user=>getUserByFirstName($_GET["first_name"]);
    $user=>getUserByLastName($_GET["last_name"]);


    echo json_encode($user);
?>