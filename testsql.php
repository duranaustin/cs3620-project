<?php

session_start();

$servername = "cs3620-sql.mysql.database.azure.com";
$username = (isset($_SESSION["SQLUSER"]) ? $_SESSION['SQLUSER'] : $_ENV["SQLUSER"]);
$password = (isset($_SESSION["SQLPW"]) ? $_SESSION['SQLPW'] : $_ENV["SQLPW"]);
$dbname = "cs3620";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO books (idBook, bookTitle, bookAuthor)
VALUES (3,'Extreme Ownership', 'Some Seal')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 