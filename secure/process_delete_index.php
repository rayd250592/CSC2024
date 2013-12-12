<?php
$id = $_POST['id'];
$imagepath = $_POST['imagepath'];
$content = $_POST['content'];

echo $id;
echo $imagepath;
echo $content;
$s_title = addslashes($title);
$s_content = addslashes($content);

//echo $s_title;
//echo $s_content;



include('../connect.php');

$query = "DELETE FROM homepage where ArticleID = $id";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>