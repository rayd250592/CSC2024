<?php

session_start();
include('../connect.php');

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

$query = "SELECT title, content FROM aboutcompany ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$title = mysql_result($display, $i, "title");
$content = mysql_result($display, $i, "content");

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
     
      <h1>New About the Company Record</h1>
      
     <form action="process_new_about.php" method="POST">
     
       	    <strong>Title: </strong> 
		<br> <input type="text"  name="title" value="" required="required"> 		
		<br>
		<br>
<strong>Content:</strong>	<br>
	<textarea cols="80" name="content" style="width:20px"></textarea>
	<br>
	<br>
	
<div id="buttons" style="margin-left:600px">
	


<input id="gobutton" type="submit" value="Submit" />
<a href="about.php"><input id="gobutton" type="button" value="Back" /></a>
	

    
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
