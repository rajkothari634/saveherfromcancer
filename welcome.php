<html>
<head>
	<title></title>
</head>
<body>
<?php
$servername = "localhost";
$ue = "root";
$pd = "";
$dbname = "save_her_from_cancer";

// Create connection
$conn = new mysqli($servername, $ue, $pd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST["Name"];
$age = $_POST["Age"];
$sex = $_POST["Gender"];
$profession = $_POST["Profession"];
$state = $_POST["State"];
$city = $_POST["CITY"];
$password = $_POST["Password"];


$sql = "INSERT INTO users(username, password, name, age, sex, profession, state, city)
VALUES ('$username', '$password', '$username', '$age', '$sex', '$profession', '$state', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>