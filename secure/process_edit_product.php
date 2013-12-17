<?php

include('../connect.php');

$id = $_POST['id'];
$machinename = $_POST['name'];
$processor = $_POST['processor'];
$hdd = $_POST['hdd'];
$ram = $_POST['ram'];
$os = $_POST['os'];
$graphics = $_POST['graphics'];
$price = $_POST['price'];
$imagepath = $_POST['imgpath'];
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

$sentfilename= $imagepath;
//die();

}
$query = "UPDATE products SET machinename='$machinename', processor='$processor', hdd='$hdd', ram='$ram', os='$os', graphics='$graphics', price= '$price', imagepath='$sentfilename'";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>