<?php
$id = $_POST['id'];



include('../connect.php');

$query = "DELETE FROM customercharter where ArticleID = $id";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>