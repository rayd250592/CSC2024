<?php
$id = $_POST['id'];
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$line3 = $_POST['line3'];

$s_line1 = addslashes($line1);
$s_line2 = addslashes($line2);
$s_line3 = addslashes($line3);

echo $id;
echo $s_line1;
echo $s_line2;
echo $s_line3;




include('../connect.php');

$query = "UPDATE footer SET line1='$s_line1', line2='$s_line2', line3='$s_line3' WHERE ArticleID = $id";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>