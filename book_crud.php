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

$sqlInsert = "INSERT INTO books (idBook, bookTitle, bookAuthor)
VALUES (5,'Extreme Ownership', 'Some Seal')";

if ($conn->query($sqlInsert) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sqlInsert . "<br>" . $conn->error;
}

$sqlQuery = "SELECT * FROM books WHERE idBook=5";

$result = $conn->query($sqlQuery);

echo $result;

$sqlDelete = "DELETE FROM books WHERE idBook=5";

if ($conn->query($sqlDelete) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error: " . $sqlDelete . "<br>" . $conn->error;
  }

$conn->close();
?> 