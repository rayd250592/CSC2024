<?php
$id = $_POST['id'];
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$line3 = $_POST['line3'];

$s_line1 = addslashes($line1);
$s_line2 = addslashes($line2);
$s_line3 = addslashes($line3);

echo $id;




include('../connect.php');

$query = "DELETE FROM footer where ArticleID = $id";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>