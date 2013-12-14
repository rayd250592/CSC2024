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
				
	
					
					</td>
				
				
				</tr>
			</table>
		
		
		





        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
