<?php

session_start();
$altid = $_GET['link'];

$idvar = ($altid*2)/100;
//echo $idvar ;


if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

include('secureheader.php');
include('../connect.php');

$query = "SELECT * FROM products where ProductID=$idvar";
//echo $query;

$display = mysql_query($query) or die (mysql_error());


$i = 0;



$machinename = mysql_result($display, $i, "machinename");
$processor= mysql_result($display, $i, "processor");

$hdd = mysql_result($display, $i, "hdd");
$ram = mysql_result($display, $i, "ram");


$os= mysql_result($display, $i, "os");
$graphics = mysql_result($display, $i, "graphics");


$price= mysql_result($display, $i, "price");
$imagepath= mysql_result($display, $i, "imagepath");

$target = '../img/products/'.$imagepath;



?>


<!DOCTYPE html>
<html>
<head>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="styles/css.css" />
<style type="text/css">
</style>
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
     
		<h1 style="margin-left:10px" > Delete Product </h1>
		
     <form enctype="multipart/form-data" action="process_delete_product.php" method="POST">
		
					
		<input type="text" name="id" value="<?php echo $idvar?>">
		
		
		<strong>Are you sure you want to delete this record?</strong>
		
		<br>
		<br>
		
		<?php  echo $machinename ?>
		
		<br>
		<br>
		
	  <?php  echo $price ?>
		
		

<div id="buttons" style="margin-left:500px">
	

<input id="gobutton" type="submit" value="Yes" style="margin-left:70px"/>

<a href="delete_product.php"><input id="gobutton" type="button" value="No" style=""/></a>

</div>


</form>

        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
