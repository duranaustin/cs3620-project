<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class ShowDAO {

  function getAllShows(){
    require_once('./utilities/connection.php');
    require_once('./show/show.php');

    
    $sql = "SELECT show_id, show_name, show_description, show_rating FROM cs3620.show";
    $result = $conn->query($sql);

    $shows;
    $index = 0;

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $show = new Show();
        $show->setShowId($row["show_id"]);
        $show->setShowName($row["show_name"]);
        $show->setShowDescription($row["show_description"]);
        $show->setShowRating($row["show_rating"]);
        $shows[$index] = $show;
        $index = $index + 1;
    }
    } else {
        echo "0 results";
    }
    $conn->close();

    return $shows;
  }

  function createShow($show){
    require_once('./utilities/connection.php');
    
    $stmt = $conn->prepare("INSERT INTO cs3620.show (`show_name`,
    `show_description`,
    `show_rating`) VALUES (?, ?, ?)");

    $sn = $show->getShowName();
    $sd = $show->getShowDescription();
    $sr = $show->getShowRating();

    $stmt->bind_param("sss", $sn, $sd, $sr);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: dashboard.php"); //navigate to dashboard.php after show created

  }

  function deleteUser($sn){
    require_once('./utilities/connection.php');
    
    $sql = "DELETE FROM cs3620.show WHERE show_name = '". $sn ."'";
    $result = $conn->query($sql);

    $conn->close();

    echo "show deleted";
  }
}
?>