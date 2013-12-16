<?php

$sentfilename = $_FILES['header']['name'];
$sentfiletemp = $_FILES['header']['tmp_name'];

$target = '../img/home/'.$sentfilename;
echo $sentfiletemp;

if(!empty($sentfilename)){
move_uploaded_file($sentfiletemp, "../img/header/$sentfilename");
}else{

echo "<p> No file selected </p>";
die();

}





include('../connect.php');

$query = "INSERT INTO header(imagepath) VALUES('$sentfilename')";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>