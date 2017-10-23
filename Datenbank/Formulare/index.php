<?php session_start();

	$username ="user";
	$password = "password";
		
		

		header("Location: view_index.html"); }
} 


?>

<html>

  <form method="post" action="index.php">
		   Username:<br/>
		   <input type="text" name="username"><br/>
		   Passwort:<br/>
			<input type="password" name="password"><br/>
			<input type="submit" name="Login">
			</form>
			
			</html>