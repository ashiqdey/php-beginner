<?php

//refer
//https://www.w3schools.com/php/php_mysql_select.asp



// Create database connection
$conn = new mysqli("localhost", "root", "", "db_name");

// Check if connection is set
if ($conn->connect_error) {
  die("Connection failed");
}



//insert a row in databse
$sql = "INSERT INTO table_name (firstname, lastname) VALUES ('John', 'Doe')";

if ($conn->query($sql) === TRUE) {
  echo "Saved";
}
else{
  echo "Failed";
}


//close the connection
$conn->close();
?>