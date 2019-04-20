<?php

// the connection
$conn = mysql_connect('localhost', 'maryjime_30', 'm5264150') or
   die('MySQL connection error!');
   
//the database
mysql_select_db('database_name');


$name = $_GET['name'];
$email = $_GET['email'];
$zipcode = $_GET['zipcode'];
 
$sql = "INSERT INTO users ('name', 'email', 'zipcode') values('$name', '#email', '$zipcode;')";


mysql_query($conn, $sql) or die('Query Error Occurred');


mysql_close($conn);

echo "1 record added";

?>   