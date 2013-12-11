<?php
$title = $_POST['title'];
$content = $_POST['content'];
$id = $_POST['id'];

echo $title;
echo $content;
$s_title = addslashes($title);
$s_content = addslashes($content);
echo $s_title;
echo $s_content;



include('../connect.php');

$query = "UPDATE aboutcompany SET title='$s_title', content='$s_content' WHERE ArticleID = $id";
echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>