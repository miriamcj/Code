<?php
include 'connection.php';

$querystr = "SELECT * FROM StudentProduct ORDER by name ASC";

$result=mysql_query($querystr, $conn);

if(!$result) die("Query failed!");

$products =array();
if(mysql_num_rows($result)) {
   while($products = mysql_fetch_assoc($result)) {
    $products[] = array('product'=>$product);
    }
  }
  
  header('Content-type: application/json');
  echo json_encode(array('products'=>$prodcuts));
  
  mysql_close($db);
  
  ?>
    
