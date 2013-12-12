<?php

session_start();
include('../connect.php');

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

//$query = "SELECT ArticleID, title, content FROM aboutcompany ORDER BY ArticleID DESC LIMIT 1";

//$display = mysql_query($query) or die (mysql_error());

//echo $display;

//$i = 0;

//$title = mysql_result($display, $i, "title");
//$content = mysql_result($display, $i, "content");
//$id = mysql_result($display, $i, "ArticleID");

//echo $title;
//echo $content;



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
     
      <h1>New Homepage Record</h1>
      
     <form enctype="multipart/form-data" action="process_new_index.php" method="POST">
     
         
      <strong>Image: </strong> 
		<br> <input type="file"  name="image" value=""> 		
		<br>
		<br>
<strong>Content:</strong>	<br>
	<textarea cols="80" name="content" style="width:20px"><?php echo $content ?> </textarea>
	<br>
	<br>
	
	<div id="buttons" style="margin-left:500px">
	

<input id="gobutton" type="submit" value="Submit" style="margin-left:70px"/>
<a href="edit_index.php"><input id="gobutton" type="button" value="Back" style=""/></a>

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
