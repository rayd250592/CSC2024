<?php
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$line3 = $_POST['line3'];

$s_line1 = addslashes($line1);
$s_line2 = addslashes($line2);
$s_line3 = addslashes($line3);

echo $s_line1;
echo $s_line2;
echo $s_line3;




include('../connect.php');

$query = "INSERT INTO footer(line1, line2, line3) VALUES('$s_line1','$s_line2','$s_line3')";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>