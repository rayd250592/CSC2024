<?php
$title = $_POST['title'];
$content = $_POST['content'];

echo $title;
echo $content;
$s_title = addslashes($title);
$s_content = addslashes($content);
echo $s_title;
echo $s_content;



include('../connect.php');

$query = "INSERT INTO aboutcompany(title, content) VALUES('$s_title','$s_content')";
echo $query;
//mysql_query($query) or die(mysql_error());

//mysql.close();


?>