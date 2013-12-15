<?php
$id = $_POST['id'];
//$title = $_POST['title'];
//$content = $_POST['content'];

//echo $id;
//echo $title;
//echo $content;
//$s_title = addslashes($title);
//$s_content = addslashes($content);

//echo $s_title;
//echo $s_content;



include('../connect.php');

$query = "DELETE FROM products where ProductID = $id";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>