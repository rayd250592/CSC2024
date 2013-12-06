<?php
session_start();
$uname = $_POST['user'];
$pass = $_POST['userpassword'];

echo $uname;
echo $pass;



include('connect.php');
include('header.php');
include('menu.php');

$query = "select * FROM logins WHERE username='$uname' and pword='$pass'";
$result = mysql_query($query) or die(mysql_error());

$count = mysql_num_rows($result);
echo $query;


if($count > 0)
{
//user has put in the correct credentials

$_SESSION['csc2024_40043298'] = $uname;


echo "<p> You have logged on. Click <a href='secure/index.php'>here</a> to edit.</p>";
}

else

{

echo "<p>Your password or username is incorrect, click <a href='login.php'>here</a> to try again.</p>";

}

include('footer.php');
?>