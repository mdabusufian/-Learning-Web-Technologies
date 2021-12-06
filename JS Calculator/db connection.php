<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "webtech";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
	die("Failed to Connect: " . $conn->connect_error);
}

$sql = "INSERT INTO registration (username, password) VALUES ('saidul', '789')";

$response = $conn->query($sql);

if ($response) {

	echo "Record Inserted Succssfully";
}
else {
	echo "Failed to Insert";
}

echo "<hr>";

$sql = "SELECT id, username, password, phone FROM registration";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
		echo $row["id"];
		echo "<br>";
		echo $row["username"];
		echo "<br>";
		echo $row["phone"];
		echo "<hr>";
	}
}

$conn->close();

?>