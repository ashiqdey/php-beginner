<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		if(isset($_GET['email'])){
			echo "<br>email : ".$_GET['email'];
		}

		if(isset($_GET['password'])){
			echo "<br>password : ".$_GET['password'];
		}

		//we will have to write code to check in mysql database, if the email and password is correct
		//we will do this next

	?>

	<hr>
	<form method="GET">
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<button>Login</button>
	</form>
</body>
</html>