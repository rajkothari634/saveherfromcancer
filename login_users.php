<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'save_her_from_cancer';
$isOrganisation = 0;
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT password FROM users WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['USERNAME']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($password);
		$stmt->fetch();
		// Account exists, now we verify the password.
		// Note: remember to use password_hash in your registration file to store the hashed passwords.
		if ($_POST['PASSWORD'] === $password) {
			// Verification success! User has loggedin!
			// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['USERNAME'];
			echo 'Welcome ' . $_SESSION['name'] . '!';
		} else {
			$isOrganisation = 1;
		echo 'Incorrect password!';
		}
	} else {
		$isOrganisation =1;
	echo 'Incorrect username!';
	}	
	$stmt->close();
}
if($isOrganisation === 1){
	if ($stmt = $con->prepare('SELECT password FROM organisations WHERE organisationname = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['USERNAME']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		$stmt->bind_result($password);
		$stmt->fetch();
		// Account exists, now we verify the password.
		// Note: remember to use password_hash in your registration file to store the hashed passwords.
		if ($_POST['PASSWORD'] === $password) {
			// Verification success! User has loggedin!
			// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['USERNAME'];
			echo 'Welcome ' . $_SESSION['name'] . '!';
		} else {
		echo 'Incorrect password!';
		}
	} else {
	echo 'Incorrect username!';
	}	
	$stmt->close();
}
}
?>
</body>
</html>