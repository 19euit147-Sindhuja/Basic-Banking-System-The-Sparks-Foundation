<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "banksystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "DELETE FROM users WHERE SNo IS NULL";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>