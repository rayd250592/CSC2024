<?php

session_start();
$id = $_POST['id'];
//echo $id;

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

include('secureheader.php');
include('../connect.php');

$query = "SELECT * FROM products where ProductID=$id";

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
     
		<h1 style="margin-left:10px" > Edit Product </h1>
		
		<br>
				
     <form enctype="multipart/form-data" action="process_edit_product.php" method="POST">
		
			<table style="width: 100%">
				<tr>
					<td>
					
					<p><strong>Name: </strong>
					<input type="text" name="name" style="margin-left:30px;" value="<?php echo $machinename ?>"></p>
					<p><strong>Processor: </strong><input type="text" name="processor" value="<?php echo $processor ?>"></p>
					<p><strong>HDD: </strong>
					<input type="text" name="hdd" style="margin-left:30px;" value="<?php echo $hdd ?>"></p>
					<p><strong>RAM: </strong><input type="text" name="ram" style="margin-left:30px;" value="<?php echo $ram ?>"></p>
					<p><strong>OS: </strong><input type="text" name="os" style="margin-left:40px;" value="<?php echo $os ?>"></p>
					<p><strong>Graphics: </strong><input type="text" name="graphics" value="<?php echo $graphics ?>"></p>
					<p><strong>Price: </strong>&pound;<input type="text" name="price" style="margin-left:30px;" value="<?php echo $price ?>"></p>
					<br>
					<br>
					
					<img src="<?php echo $target ?>" alt="image" width="50%" height="50%">
		
					<p><strong>Product Image: </strong><input type="file" name="image" value="">
					

					
					</td>
					
					
					
					<td>
				
	
					
					</td>
				
				
				</tr>
			</table>
		
		
		<br>
		<br>
		<br>

<div id="buttons" style="margin-left:300px">

<?php

$idvar = ($id*100)/2;
//echo $idvar;

?>
	

<input id="gobutton" type="submit" value="Submit" style="margin-left:70px"/>
<?php echo '<a href="delete_product.php?link=' . $idvar . '"><input id="gobutton" type="button" value="Delete"/></a>'; ?>
<a href="product.php"><input id="gobutton" type="button" value="Back" style=""/></a>

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
