<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
/*
php code 
1. to get the email and password
2. make the database connection
3. Check if account exists with the email
3. create the account

*/

		if(isset($_GET['email']) && isset($_GET['password'])){
			$email = $_GET['email'];
			$password = $_GET['password'];


			// Create database connection
			$conn = new mysqli("localhost", "root", "", "db_name");

			// Check if connection is set
			if ($conn->connect_error) {
			  die("Connection failed");
			}


			//check if account exissts with the email
			$result = $conn->query("SELECT * FROM user WHERE email='$email'");

			if($result->num_rows > 0) {
			  echo "Account exists";
			}
			else{
				//account doesn't exisst so sinup now

				//insert a row in databse
				$sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";
				if ($conn->query($sql) === TRUE) {
				  echo "Signed up, now user can login";
				}
				else{
				  echo "Failed to signup";
				}
			}


			//close the connection
			$conn->close();
		}
	?>



	<hr>
	<form method="GET">
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<button>Signup</button>
	</form>
</body>
</html>

