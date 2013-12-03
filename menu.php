
<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href="menu_source/styles.css" />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src="menu_source/menu_jquery.js"></script>
</head>
<body>
<div id='cssmenu'>
<ul>

<li class='active'><a href='login.php'><span>Login</span></a></li>
   <li class='active'><a href='index.php'><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>About</span></a>
      <ul>
       <li><a href='about.php'>About the Company</a></li>
         <li><a href="company_history.php">Company History</a></li>
         <li class='last'><a href="cust_charter.php"><span>Customer Charter</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Products</span></a>
      <ul>
         <li><a href="laptops.php"><span>Laptops</span></a></li>
         <li class='last'><a href="desktops.php"><span>Desktops</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='contact.php'><span>Contact Us</span></a></li>
</ul>
</div>
</body>
</html>