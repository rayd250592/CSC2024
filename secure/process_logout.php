<?php
session_start();

if(isset($_SESSION['csc2024_40043298']))
{

	unset($_SESSION['csc2024_40043298']);
	echo "<p>You have now logged out. Click <a href='../'>hete</a> to go back.</p>";
}

else

{

header("Location: login.php");
}

?>