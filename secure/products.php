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
<?php include 'secureheader.php'; ?>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="styles/css.css" />
</head>
<body style="background-color:silver">
    <div id="wrapper">
        <div id="headerwrap">
     
                  


 </div>
       
        <div id="leftcolumnwrap">

       
<?php include 'menu.php'; ?>

        </div>
        <div id="contentwrap">
        <div id="content">
     
		<h1 style="margin-left:10px" > Products </h1>
		
		<p>Welcome to Raymond's PC's. Here you will find the best deal's on laptops and computers in the country. Keep an eye out for our seasonal offers.</p>
		<p>With free onsite parking and excellent advice when buying a PC or laptop, you wont want to buy anywhere else!</p>
		





        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
