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
$sql = "CREATE TABLE users (SNo int ,Name varchar(20),EmailId varchar(20),Gender varchar(10),Balance int,Acc_Number varchar(20))";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>