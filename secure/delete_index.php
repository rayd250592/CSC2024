<?php

session_start();
include('../connect.php');

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}





$query = "SELECT ArticleID, imagepath, content FROM homepage ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$id = mysql_result($display, $i, "ArticleID");
$imagepath = mysql_result($display, $i, "imagepath");
$content = mysql_result($display, $i, "content");

$target = '../img/home/'.$imagepath;
$content_to_display = mysql_real_escape_string( strip_tags( $content ) );

//echo $target;



?>


<!DOCTYPE html>
<html>
<head>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({
        
        selector:'textarea'
  
        
        
        });

        
</script>

<?php include 'secureheader.php'; ?>
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
     
      <h1>Delete Homepage Record</h1>
      
     <form action="process_delete_index.php" method="POST">
     
    
	 <input type="hidden"  name="id" value="<?php echo $id ?> "> 		
     
     <strong>Are you sure you want to delete this record?:</strong>	
     <br>
     <br>
     

     <input type="hidden"  name="id" value="<?php echo $id?> ">
      <input type="hidden"  name="imagepath" value="<?php echo $imagepath?>" width="75%" height="75%">
    
	    <strong>Image:</strong>	<br>
	<img src="<?php echo $target ?>" alt="homepage logo" width="75%" height="75%" />
	<br>
	<br>
<strong>Content: </strong> 
		<br> <input type="text"  name="title" value="<?php echo $content_to_display?> "> 		
		<br>
		<br>
	
	<div id="buttons" style="margin-left:500px">
	
<input id="gobutton" type="submit" value="Submit" />
<a href="edit_index.php"><input id="gobutton" type="button" value="Back" onclick="javascript:location.href = 'edit_index.php';"/></a>


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
