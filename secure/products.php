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
<?php include 'secureheader.php'; 


$query = "SELECT * FROM products";

include '../connect.php';


$display = mysql_query($query) or die (mysql_error());




?>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="styles/css.css" />
<link rel="stylesheet" type="text/css" href="../styles/tables.css"/>

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
		
		
		echo "<table id='box-table-a'>"; 

while($row = mysql_fetch_array($display))
{   //Creates a loop to loop through results

$id = $row['ProductID'];
echo "<tr><td>" . $row['machinename'] . "</td><td>&pound" . $row['price'] . "</td><td style='visibility:hidden'>" . $row['ProductID'] . "</td><td style='background-color:white'>" . "<form action='edit_product.php' method='post'><input type='hidden' name='id' value=$id><input type='submit' id='gobutton' value='Edit'> </form>". "</td></tr>";

 
}

echo "</table>"
        
        ?>


<div id="buttons" style="margin-left:500px">
	
<a href="new_product.php"><input id="gobutton" type="button" value="New"/></a>
<!--<a href="delete_product.php"><input id="gobutton" type="button" value="Delete"/></a>!-->


</div>



        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
