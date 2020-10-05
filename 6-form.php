<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

		if(isset($_GET['name'])){
			echo "<br>Name : ".$_GET['name'];
		}

		if(isset($_GET['age'])){
			echo "<br>Age : ".$_GET['age'];
		}

	?>

	<hr>
	<form method="GET" action="6.php">
		<input type="text" name="name" placeholder="name"><br>
		<input type="number" name="age" placeholder="age"><br>
		<button>SUBMIT</button>
	</form>
</body>
</html>