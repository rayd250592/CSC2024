<?php

include('../connect.php');

$id = $_POST['id'];
$content = $_POST['content'];
$filename = $_FILES['imageedit']['name'];
$sentfiletemp = $_FILES['imageedit']['tmp_name'];
$imagepath = $_POST['imgpath'];


echo $filename;
$target = '../img/home/'.$sentfilename;
echo $sentfiletemp;
echo $id;
echo $content;


if(!empty($filename)){
move_uploaded_file($sentfiletemp, "../img/home/$filename");
}else{

$filename= $imagepath;
//die();

}
$query = "UPDATE homepage SET imagepath='$filename', content='$content' WHERE ArticleID = $id";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>