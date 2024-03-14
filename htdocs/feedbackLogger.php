<?php header('Access-Control-Allow-Origin: *');
// Gets variables from user’s request. Puts user's data into our variables.
$name = $_POST['name'];
$email = $_POST['email'];
$header = $_POST['header'];
$message = $_POST['message'];

// Makes variables for database connection
$data = array(
    'user' => array('name' => $name, 'email' => $email, 'header' => $header, 'message' => $message)
    );

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "userFeedback";

// Creates connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checks connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepares and Adds the User Data into the Database
$stmt = $conn->prepare("INSERT INTO userData (name, email, header, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $header, $message);

// Executes the Prepare and Add command
$stmt->execute();


echo "New records created successfully";

// Closes connection with the server
$stmt->close();
$conn->close();
?>