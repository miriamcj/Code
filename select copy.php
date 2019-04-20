<?php

//database connection
$conn = mysql_connect('localhost', 'maryjime_30', 'm5264150') or
    die('Error connecting to MySQL!');
    
//select the database, specifying the connection to username
mysql_select_db($database, $conn);

$sql = "SELECT * FROM students";

$result = mysql_query($sql, $conn);

while($row = mysql_fetch_array($result))
  	{
  		echo $row['FirstName'] . " " . $row['LastName'];
  		echo "<br>";
  	}

?>     