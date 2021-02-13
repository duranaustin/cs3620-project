<?php
    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('./user/user.php');
    //$id = $_GET["id"];
    $user = new user();
    //$user->getUser($id);
    $user->getUserByData($_GET["username"], $_GET["first_name"], $_GET["last_name"]);


    echo json_encode($user);
?>