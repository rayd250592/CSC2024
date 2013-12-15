<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; 

$id = $_POST['id'];

$query = "SELECT * FROM products where ProductID=$id";
$display = mysql_query($query) or die (mysql_error());


$i = 0;

$id = mysql_result($display, $i, "ProductID");

$machinename = mysql_result($display, $i, "machinename");
$processor= mysql_result($display, $i, "processor");

$hdd = mysql_result($display, $i, "hdd");
$ram = mysql_result($display, $i, "ram");


$os= mysql_result($display, $i, "os");
$graphics = mysql_result($display, $i, "graphics");


$price= mysql_result($display, $i, "price");
$imagepath= mysql_result($display, $i, "imagepath");

$target = 'img/products/'.$imagepath;

 

?>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="styles/css.css" />
</head>
<body style="background-color:<?php echo $colour ?>">
    <div id="wrapper">
        <div id="headerwrap">
     
                  


 </div>
       
        <div id="leftcolumnwrap">

       
<?php include 'menu.php'; ?>

        </div>
        <div id="contentwrap">
        <div id="content">
     
		<h1 style="margin-left:10px" > Product Details </h1>
		
		
		
			<table style="width: 100%">
				<tr>
					<td>
					
					<p><strong>Name: </strong><?php echo $machinename  ?></p>
					<p><strong>Processor: </strong><?php echo $processor?></p>
					<p><strong>HDD: </strong><?php echo $hdd  ?></p>
					<p><strong>RAM: </strong><?php echo $ram  ?></p>
					<p><strong>OS: </strong><?php echo $os  ?></p>
					<p><strong>Graphics: </strong><?php echo $graphics  ?></p>
					<p><strong>Price: </strong>&pound;<?php echo $price  ?></p>

					
					</td>
					
					
					
					<td>
					
									
		<img src="<?php echo $target ?>" alt="product_image" width="50%" height="50%" style="margin-left:30px">
					
					</td>
				
				
				</tr>
			</table>
		
		
		





        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>
