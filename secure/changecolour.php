<?php

session_start();

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

?>

<html>
<head>
<?php include 'secureheader.php'; ?>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="../styles/css.css">
<script type="text/javascript" src="../js/colour/jscolor.js"></script>
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
     
		<h1 style="margin-left:10px" >  Change Background Colour </h1>
		
		<form action="" method="post">
		
		<strong>Pick a Background Colour: </strong><input class="color" id="colourpick">
		
		<br>
		<br>
		
		<input type="button" id="gobutton" value="Submit">
		
		</form>
		
		
	    
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>

