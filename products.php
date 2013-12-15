<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; 

$query = "SELECT * FROM products";

//$query = "SELECT * ProductID, machinename, processor, hdd, ram, os, graphics, price, imagepath, FROM products";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

//$i = 0;

//$id = mysql_result($display, $i, "ProductID");

//$machinename = mysql_result($display, $i, "machinename");
//$processor= mysql_result($display, $i, "processor");

//$hdd = mysql_result($display, $i, "hdd");
//$ram = mysql_result($display, $i, "ram");


//$os= mysql_result($display, $i, "os");
//$graphics = mysql_result($display, $i, "graphics");


//$price= mysql_result($display, $i, "price");
//$imagepath= mysql_result($display, $i, "imagepath");


?>

<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="styles/css.css" />
<link rel="stylesheet" type="text/css" href="styles/tables.css" />
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
     
		<h1 style="margin-left:10px;" > Products </h1>
		
		<?php
		
		
		echo "<table id='box-table-a'>"; 

while($row = mysql_fetch_array($display))
{   //Creates a loop to loop through results

$id = $row['ProductID'];
echo "<tr><td>" . $row['machinename'] . "</td><td>&pound" . $row['price'] . "</td><td style='visibility:hidden'>" . $row['ProductID'] . "</td><td style='background-color:white'>" . "<form action='individual_product.php' method='post'><input type='hidden' name='id' value=$id><input type='submit' id='gobutton' value='More Details'> </form>". "</td></tr>";

 
}

echo "</table>"
        
        ?>
        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>
