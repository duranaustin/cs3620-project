<?php
    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('./user/user.php');

    $user = new user();
    
    if(!empty($_GET["id"])){
        $user->getUser($_GET["id"]);
    }
    elseif(!empty($_GET["username"])){
         $user->getUserByUsername($_GET["username"]);
    }
    elseif(!empty($_GET["firstname"])){
         $user->getUserByFirstName($_GET["firstname"]);
    }
    elseif(!empty($_GET["lastname"])){
         $user->getUserByLastName($_GET["lastname"]);
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("You did not provide data in any of the boxes")';
        echo '</script>';    
    }

    echo json_encode($user);
?>