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

$sql = "INSERT INTO users(SNo,Name,EmailId,Gender,Balance,Acc_Number)
VALUES (1,'Sindhu','sindhu@gmail.com','Female',9500,'SRRV000JC001'),
(2,'Swathi','swathi@yahoo.com','Female',1000,'SRRV000JC002'),
(3,'Sneha','sneha@yahoo.com','Female',5000,'SRRV000JC003'),
(4,'Deeba','deeba1@gmail.com','Female',3000,'SRRV000JC004'),
(5,'Deepi','deepi@gmail.com','Female',6600,'SRRV000JC006'),
(6,'Devi','devi@gmail.com','Female',1000,'SRRV000JC007'),
(7,'Dharik','dharik8@gmail.com','Male',4000,'SRRV000JC008'),
(8,'Nithiya','nithiya@gmail.com','Female',7600,'SRRV000JC009'),
(9,'Kavin','kavin@yahoo.com','Male',11000,'SRRV000JC010'),
(10,'Vainavi','vainavi@gmail.com','Female',8600,'SRRV000JC011'),
(11,'Ragu','ragu@gmail.com','Male',2500,'SRRV000JC012'),
(12,'Sharm','sharm@yahoo.com','Female',9700,'SRRV000JC098'),
(13,'Vino','vino@gmail.com','Female',7000,'SRRV000JC100'),
(14,'yash','yash@yahoo.com','Male',9000,'SRRV000JC156')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>