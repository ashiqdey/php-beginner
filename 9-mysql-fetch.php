<?php

// Create database connection
$conn = new mysqli("localhost", "root", "", "db_name");

// Check if connection is set
if ($conn->connect_error) {
  die("Connection failed");
}






/*---------------------------------

SQL query example
---------------------


1. fetch only firstname
QUERY: SELECT firstname FROM table_name


2. user whose name starts with s
QUERY: SELECT * FROM table_name WHERE firstname LIKE 's%'


3. user whose name contains a
QUERY: SELECT * FROM table_name WHERE firstname LIKE '%a%'


4. user whose id > 3
QUERY: SELECT * FROM table_name WHERE id>3


5. fetch first 2 user
QUERY: SELECT * FROM table_name LIMIT 2


6. fetch first 2 user starting from row no. 4
QUERY: SELECT * FROM table_name LIMIT 2 OFFSET 4



7. fetch all user in ascending
QUERY: SELECT * FROM table_name ORDER BY firstname


--------------------------*/


//fetch data from database
$sql = "SELECT * FROM table_name";

$result = $conn->query($sql);

if($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){

    echo "<br>Name: ".$row["firstname"];
  }
}else {
  echo "0 results";
}


//close the connection
$conn->close();
?>