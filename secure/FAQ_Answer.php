<?php

session_start();
include('../connect.php');

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

$query = "SELECT ArticleID, title, content FROM aboutcompany ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$title = mysql_result($display, $i, "title");
$content = mysql_result($display, $i, "content");
$id = mysql_result($display, $i, "ArticleID");

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
.auto-style1 {
	text-align: left;
}
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
     
      <h1>Edit About the Company</h1>
      
     <form action="process_about.php" method="POST">
     
    
	 <input type="hidden"  name="id" value="<?php echo $id ?> "> 		
     
    
	    <strong>Title: </strong> 
		<br> <input type="text"  name="title" value="<?php echo $title ?> "> 		
		<br>
		<br>
<strong>Content:</strong>	<br>
	<textarea cols="80" name="content" style="width:20px"><?php echo $content ?> </textarea>
	<br>
	<br>
	
	<div id="buttons" style="margin-left:500px">
	
<a href="new_about.php"><input id="gobutton" type="button" value="New"/></a>
<a href="delete_about.php"><input id="gobutton" type="button" value="Delete"/></a>
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
