<?php

include('../connect.php');

$machinename = $_POST['name'];
$processor = $_POST['processor'];
$hdd = $_POST['hdd'];
$ram = $_POST['ram'];
$os = $_POST['os'];
$graphics = $_POST['graphics'];
$price = $_POST['price'];
$sentfilename = $_FILES['image']['name'];
$sentfiletemp = $_FILES['image']['tmp_name'];


//echo $sentfilename;
$target = '../img/home/'.$sentfilename;
echo $machinename;
echo $processor;
echo $hdd;
echo $ram;
echo $os;
echo $graphics;
echo $price;
echo $sentfiletemp;
//echo $target;

if(!empty($sentfilename)){
move_uploaded_file($sentfiletemp, "../img/products/$sentfilename");
}else{

echo "<p> No file selected </p>";
die();

}
$query = "INSERT INTO products(machinename, processor, hdd, ram, os, graphics, price, imagepath) VALUES('$machinename','$processor','$hdd','$ram','$os','$graphics','$price','$sentfilename')";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>