<?php

session_start();

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href="../menu_source/styles.css" />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src="../menu_source/menu_jquery.js"></script>
</head>
<body>
<div id='cssmenu'>
<ul>

<li class='active'><a href='#'><span>Admin Menu</span></a></li>
   <li class='active'><a href='index.php'><span>Home</span></a></li>
   <li class='active'><a href='edit_index.php'><span>Homepage</span></a></li>
   <li class='has-sub'><a href='#'><span>About</span></a>
      <ul>
       <li><a href='about.php'>About the Company</a></li>
         <li><a href="edit_company_history.php">Company History</a></li>
         <li class='last'><a href="cust_charter.php"><span>Customer Charter</span></a></li>
      </ul>
   </li>
    <li class='last'><a href='products.php'><span>Products</span></a></li>
    
    <li class='has-sub'><a href='#'><span>Other</span></a>
      <ul>
         <li><a href="header.php"><span>Header</span></a></li>
         <li><a href="changecolour.php"><span>Change Colour</span></a></li>
         <li class='last'><a href="footer.php"><span>Footer</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='documents.php'><span>Documents</span></a></li>
   <li class='last'><a href='process_logout.php'><span>Logout</span></a></li>
</ul>
</div>
</body>
</html>