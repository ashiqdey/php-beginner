<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php
		if(isset($_GET['email']) && isset($_GET['password'])){
			$email = $_GET['email'];
			$password = $_GET['password'];



			// Create database connection
			$conn = new mysqli("localhost", "root", "", "db_name");

			// Check if connection is set
			if ($conn->connect_error) {
			  die("Connection failed");
			}


			//fetch data from database
			$result = $conn->query("SELECT * FROM user WHERE email='$email' AND password='$password'");

			if($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()){

			    echo "<br>ID: ".$row["id"];
			    echo "<br>Name: ".$row["name"];
			    
			  }
			}else {
			  echo "Invalid password";
			}

			//close the connection
			$conn->close();
		}
	?>



	<hr>
	<form method="GET">
		<input type="email" name="email" placeholder="Email"><br>
		<input type="password" name="password" placeholder="Password"><br>
		<button>Login</button>
	</form>
</body>
</html>

