<?php
session_start();
$q = $_REQUEST["q"];
if($q === "checksession"){
	if( isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === TRUE){
		echo $_SESSION['name'];
	}else{
		$r = "!@#$#@!$%^*&%()$*%&^#@*";
		echo $r;
	}
}
else{
	// remove all session variables
	//$_SESSION['loggedin'] = FALSE;
	session_unset();

	// destroy the session
	session_destroy();
	echo "logoutcompleted";
}
?>