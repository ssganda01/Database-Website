<?php header('Access-Control-Allow-Origin: *');
// Makes variables for database connection
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

$sql = "SELECT name, email, header, message FROM userData";
$result = $conn->query($sql);

//Puts data into table
echo "<table border='1'>
<tr>
<th>Name</th>
<th>Email</th>
<th>Header</th>
<th>Message</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['header'] . "</td>";
echo "<td>" . $row['message'] . "</td>";
echo "</tr>";
}
echo "</table>";

//This code does not work... was meant for creating a table in a html document through json parsing.
/*$data = array(
	'name' => $row['name'],
	'email' => $row['email'],
	'header' => $row['header'],
	'message' => $row['message']
);

$myJSON = json_encode($data)
echo $myJSON;*/

// Closes connection with the server
$conn->close();
?>