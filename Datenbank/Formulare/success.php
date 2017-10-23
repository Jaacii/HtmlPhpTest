<?php 
session_start();
	if (isset ($SESSION['loggedin']) || $_SESSION['loggedin'] == false  ) {
	header ("Location: index.php")
	
	}

?>

<h2> Loggin complete </h2>