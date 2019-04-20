<?php


$conn = mysql_connect('localhost', 'maryjime_30', 'm5264150') or
    die('Error connecting to MySQL!');
    

mysql_select_db('maryjime_30_StudentProduct');    


$sql = "SELECT * FROM Products";   

$result = mysql_query($sql, $conn);


while($row = mysql_fetch_array($result))
  	{
  		echo '<p>';
			echo $row["1ProductName"];
			echo '<br>';
			
			echo $row["1ProductDescription"];
			echo '<br>';
			
			echo $row["1ProductPrice"];
			echo '<br><br>';

			
			echo $row["2ProductName"];
			echo '<br>';
			
			echo $row["2ProductDescription"];
			echo '<br>';
			
			echo $row["2ProductPrice"];
			echo '<br><br>';
			
			
			echo $row["3ProductName"];
			echo '<br>';
			
			echo $row["3ProductDescription"];
			echo '<br>';
			
			echo $row["3ProductPrice"];
			echo '<br><br>';
			
			
			echo $row["4ProductName"];
			echo '<br>';
			
			echo $row["4ProductDescription"];
			echo '<br>';
			
			echo $row["4ProductPrice"];
			echo '<br><br>';
			
			
			echo $row["5ProductName"];
			echo '<br>';
			
			echo $row["5ProductDescription"];
			echo '<br>';
			
			echo $row["5ProductPrice"];
			echo '<br><br>';
			
			
			echo $row["6ProductName"];
			echo '<br>';
			
			echo $row["6ProductDescription"];
			echo '<br>';
			
			echo $row["6ProductPrice"];
			echo '<br><br>';
			
			
			echo $row["7ProductName"];
			echo '<br>';
			
			echo $row["7ProductDescription"];
			echo '<br>';
			
			echo $row["7ProductPrice"];
			echo '<br><br>';
			
			
			
			echo $row["8ProductName"];
			echo '<br>';
			
			echo $row["8ProductDescription"];
			echo '<br>';
			
			echo $row["8ProductPrice"];
			echo '<br><br>';
			
			
			
			echo $row["9ProductName"];
			echo '<br>';
			
			echo $row["9ProductDescription"];
			echo '<br>';
			
			echo $row["9ProductPrice"];
			echo '<br><br>';
			
			
			
			echo $row["10ProductName"];
			echo '<br>';
			
			echo $row["10ProductDescription"];
			echo '<br>';
			
			echo $row["10ProductPrice"];
			echo '<br><br>';
			
			
			echo $row["11ProductName"];
			echo '<br>';
			
			echo $row["11ProductDescription"];
			echo '<br>';
			
			echo $row["11ProductPrice"];
			echo '<br><br>';
  	}

?>     