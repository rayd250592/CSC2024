<?php
$title = $_POST['title'];
$content = $_POST['content'];


include('connect.php');

$query = "select * FROM logins WHERE username='$uname' and pword='$pass'";

?>