<?php

include('../connect.php');

$content = $_POST['content'];
$sentfilename = $_FILES['image']['name'];
$sentfiletemp = $_FILES['image']['tmp_name'];


//echo $sentfilename;
$target = '../img/home/'.$sentfilename;
echo $sentfiletemp;
//echo $target;

if(!empty($sentfilename)){
move_uploaded_file($sentfiletemp, "../img/home/$sentfilename");
}else{

echo "<p> No file selected </p>";
die();

}
$query = "INSERT INTO homepage(imagepath, content) VALUES('$sentfilename','$content')";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>