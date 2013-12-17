<?php

session_start();

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

include('../connect.php');

$queryimage = "SELECT HeaderID, imagepath FROM header ORDER BY HeaderID DESC LIMIT 1";

$displayimage = mysql_query($queryimage) or die (mysql_error());

//echo $display;

$x = 0;

$id = mysql_result($displayimage, $x, "HeaderID");
$imagepath = mysql_result($displayimage, $x, "imagepath");


$target = '../img/header/'.$imagepath;



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
     
		<h1 style="margin-left:10px" > Edit Header </h1>


<form  enctype="multipart/form-data" action="process_edit_header.php" method="post">
	        
	        <p><label>Image: </label>
	        <br>
	        <br>
	        <br>
	        
	        <input type="hidden" value="<?php echo $id ?>"name="id" style="margin-left:20px;" />
	        
	        <img src="<?php echo $target ?>" alt="editimage" height="75%" width="75%">
	        
	        <br>
	        <br>
	        

	        
	        <input type="file" name="header" required style="margin-left:20px;" />
	        </p>
	       	    

	        <div id="buttons" style="margin-left:500px">
	
<a href="new_header.php"><input id="gobutton" type="button" value="New" onclick="javascript:location.href = 'new_header.php'"/></a>
<a href="delete_header.php"><input id="gobutton" type="button" value="Delete" onclick="javascript:location.href = 'delete_header.php'"/></a>
<input id="gobutton" type="submit" value="Submit" />

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
