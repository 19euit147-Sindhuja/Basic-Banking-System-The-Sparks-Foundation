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

$sql = "INSERT INTO transfer(s_name,s_acc_no,r_name,r_acc_no,amount) 
VALUES ('Sindhu','SRRV0000JC001','Swathi','SRRV0000JC002',1000),
('Ragu','SRRV0000JC012','Deeba','SRRV0000JC004',1500),
('Devi','SRRV0000JC007','Dharik','SRRV0000JC008',3000),
('Vainavi','SRRV0000JC011','yash','SRRV0000JC156',2000),
('Vino','SRRV0000JC100','Sharm','SRRV0000JC098',1600)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>