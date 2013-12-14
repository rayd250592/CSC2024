<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; 

$query = "SELECT ProductID, machinename, processor, hdd, ram, os, graphics, price, imagepath, content4 FROM products ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$id = mysql_result($display, $i, "ArticleID");

$machinename = mysql_result($display, $i, "machinename");
$processor= mysql_result($display, $i, "processor");

$hdd = mysql_result($display, $i, "hdd");
$ram = mysql_result($display, $i, "content1");


$os= mysql_result($display, $i, "os");
$graphics = mysql_result($display, $i, "graphics ");


$price= mysql_result($display, $i, "price");
$imagepath= mysql_result($display, $i, "imagepath");


?>

<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="styles/css.css" />
<link rel="stylesheet" type="text/css" href="styles/tables.css" />
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
		
		<?php
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['machinename'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


?>
        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>
