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
$sql = "DROP TABLE  transfer";

if ($conn->query($sql) === TRUE) {
  echo "Table transfers created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>