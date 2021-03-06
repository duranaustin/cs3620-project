<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class UserDAO {
  function checkLogin($passedinusername, $passedinpassword){

    require_once('./utilities/connection.php');
    $user_id = 0;
    $sql = "SELECT iduser FROM user WHERE username = '" . $passedinusername . "' AND password = '" . hash("sha256", trim($passedinpassword)) . "'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $user_id = $row["iduser"];
      }
    }
    else {
        echo "0 results";
    }
    $conn->close();
    return $user_id;
  }

  function getUser($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, iduser FROM user WHERE iduser =" . $user->getUserId();
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function getUserByUsername($user){
    require_once('./utilities/connection.php');
    $username = $user->getUsername();

    $sql = "SELECT first_name, last_name, username, iduser FROM user WHERE username = '$username';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function getUserByFirstName($user){
    require_once('./utilities/connection.php');
    $first_name = $user->getFirstName();

    $sql = "SELECT first_name, last_name, username, iduser FROM user WHERE first_name = '$first_name';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function getUserByLastName($user){
    require_once('./utilities/connection.php');
    $last_name = $user->getLastName();

    $sql = "SELECT first_name, last_name, username, iduser FROM user WHERE last_name = '$last_name';";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function createUser($user){
    require_once('./utilities/connection.php');
    
    $stmt = $conn->prepare("INSERT INTO cs3620.user (`username`,
    `password`,
    `first_name`,
    `last_name`) VALUES (?, ?, ?, ?)");

    $un = $user->getUsername();
    $pw = $user->getPassword();
    $fn = $user->getFirstName();
    $ln = $user->getLastName();

    $stmt->bind_param("ssss", $un, $pw, $fn, $ln);
    $stmt->execute();

    $stmt->close();
    $conn->close();
    header("Location: login.html"); //navigate to login.html after user created
  }

  function deleteUser($un){
    require_once('./utilities/connection.php');
    
    $sql = "DELETE FROM cs3620.user WHERE username = '".$un ."'";
    $result = $conn->query($sql);

    $conn->close();

    echo "user deleted";
  }
}
?>