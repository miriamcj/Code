<?php 
	
	
	$conn = mysql_connect('localhost', 'maryjime_30', 'm5264150') or 
		die('MySQL Connection Error');
		mysql_select_db('database_name');

	
	$sql = "SELECT * FROM StudentsProduct";


	$result = mysql_query($sql, $conn);
		
 ?>