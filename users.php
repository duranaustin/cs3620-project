<?php
   session_start();

   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

   require_once('./user/user.php');
   echo '<script>console.log('.$_GET("username").')</script>';
   echo '<script>console.log('.$_GET("first_name").')</script>';
   echo '<script>console.log('.$_GET("last_name").')</script>';

    $username = $_GET["username"];
    $first_name = $_GET["first_name"];
    $last_name = $_GET["last_name"];

    echo '<script>console.log('.$username.')</script>';
    echo '<script>console.log('.$first_name.')</script>';
    echo '<script>console.log('.$last_name.')</script>';

    //$id = $_GET["id"];
    $user = new user();
    //$user->getUser($id);
    $user=>getUserByData($username, $first_name, $last_name);


    echo json_encode($user);
?>