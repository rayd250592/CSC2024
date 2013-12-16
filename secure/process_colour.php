<?php
$value = $_POST['hexvalue'];




include('../connect.php');

$query = "UPDATE colour SET hexvalue='#$value' WHERE ColourID = 1";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>