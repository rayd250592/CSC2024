<?php

session_start();

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

include('secureheader.php');

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
     
		<h1 style="margin-left:10px" > New Product </h1>
		
     <form enctype="multipart/form-data" action="process_new_product.php" method="POST">
		
			<table style="width: 100%">
				<tr>
					<td>
					
					<p><strong>Name: </strong>
					<input type="text" name="name" style="margin-left:30px;"></p>
					<p><strong>Processor: </strong><input type="text" name="processor"></p>
					<p><strong>HDD: </strong>
					<input type="text" name="hdd" style="margin-left:30px;" ></p>
					<p><strong>RAM: </strong><input type="text" name="ram" style="margin-left:30px;"></p>
					<p><strong>OS: </strong><input type="text" name="os" style="margin-left:40px;"></p>
					<p><strong>Graphics: </strong><input type="text" name="graphics"></p>
					<p><strong>Price: </strong>&pound;<input type="text" name="price" style="margin-left:30px;"></p>
					<br>
		
					<p><strong>Product Image: </strong><input type="file" name="image">
					

					
					</td>
					
					
					
					<td>
				
	
					
					</td>
				
				
				</tr>
			</table>
		
		
		

<div id="buttons" style="margin-left:500px">
	

<input id="gobutton" type="submit" value="Submit" style="margin-left:70px"/>
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
