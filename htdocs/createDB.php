<?php
// Sets the variables needed to establish server connection
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "userFeedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "ALTER TABLE userData
ADD COLUMN header VARCHAR(30) AFTER email;";

if ($conn->query($sql) === TRUE) {
  echo "new column made successfully";
} else {
  echo "Error making new column: " . $conn->error;
}

// Closes connection with the server
$conn->close();
?>