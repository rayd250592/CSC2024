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

<link rel="stylesheet" type="text/css" href="../styles/css.css" />
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
     
		<h1 style="margin-left:10px" > New Header </h1>


<form enctype="multipart/form-data" action="process_new_header.php" method="post">
	        
	        <p><label>Image: </label>
	        <input type="file" name="header" required style="margin-left:20px;" />
	        </p>
	       	    

	        <div id="buttons" style="margin-left:600px">
	
<input id="gobutton" type="submit" value="Submit"/>
<a href="header.php"><input id="gobutton" type="button" value="Back"/></a>

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
