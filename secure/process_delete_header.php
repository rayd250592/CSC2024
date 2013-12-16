<?php

include('../connect.php');

$id = $_POST['id'];
$sentfilename = $_FILES['header']['name'];
$sentfiletemp = $_FILES['header']['tmp_name'];

echo $sentfilename;
$target = '../img/header/'.$sentfilename;






$query = "DELETE FROM header WHERE HeaderID='$id'";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>