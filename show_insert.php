<?php

session_start();

require_once('./show/show.php');

$show = new Show();
$show->setShowName($_POST["name"]);
$show->setShowDescription($_POST["description"]);
$show->setShowRating($_POST["rating"]);
$show->createShow($_SESSION["user_id"]);

?>