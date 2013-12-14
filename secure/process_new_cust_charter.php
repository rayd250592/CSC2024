<?php
$title = $_POST['title'];
$content = $_POST['content'];
$title1 = $_POST['title1'];
$content1 = $_POST['content1'];
$title2 = $_POST['title2'];
$content2 = $_POST['content2'];
$title3 = $_POST['title3'];
$content3 = $_POST['content3'];
$title4 = $_POST['title4'];
$content4 = $_POST['content4'];


$s_title = addslashes($title);
$s_content = addslashes($content);

$s_title1 = addslashes($title1);
$s_content1 = addslashes($content1);

$s_title2 = addslashes($title2);
$s_content2 = addslashes($content2);

$s_title3 = addslashes($title3);
$s_content3 = addslashes($content3);

$s_title4 = addslashes($title4);
$s_content4 = addslashes($content4);

echo $s_title;
echo $s_content;


echo $s_title1;
echo $s_content1;



echo $s_title2;
echo $s_content2;



echo $s_title3;
echo $s_content3;



echo $s_title4;
echo $s_content4;




include('../connect.php');

$query = "INSERT INTO customercharter(title, content, title1, content1, title2, content2, title3, content3, title4, content4) VALUES('$s_title','$s_content','$s_title1','$s_content1','$s_title2','$s_content2','$s_title3','$s_content3','$s_title4','$s_content4')";
echo $query;
//mysql_query($query) or die(mysql_error());
//mysql_close();

?>