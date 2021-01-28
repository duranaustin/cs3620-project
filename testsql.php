<?php
$servername = "cs3620-sql.mysql.database.azure.com";
$username = "aduran@cs3620-sql";
$password = "";
$dbname = "cs3620";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO books (idBook, bookTitle, bookAuthor)
VALUES (2,'Extreme Ownership', 'Some Seal')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 