<?php

include('../connect.php');

$id = $_POST['id'];
$sentfilename = $_FILES['header']['name'];
$sentfiletemp = $_FILES['header']['tmp_name'];

echo $sentfilename;
$target = '../img/header/'.$sentfilename;

if(!empty($sentfilename)){
move_uploaded_file($sentfiletemp, "../img/header/$sentfilename");
}else{

echo "<p> No file selected </p>";
die();

}






$query = "UPDATE header SET imagepath='$sentfilename'";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>