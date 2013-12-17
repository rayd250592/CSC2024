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


//echo $query;

$i = 0;

$id = mysql_result($display, $i, "ArticleID");
$title = mysql_result($display, $i, "title");
$content = mysql_result($display, $i, "content");

//echo $id;
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
     
      <h1>Delete About the Company Record</h1>
      
     <form action="process_delete_about.php" method="POST">
     
     <br> <input type="hidden"  name="id" value="<?php echo $id ?> "> 	
     

<br> <input type="hidden"  name="title" value="<?php echo $title ?> "> 	
     

    
<br> <input type="hidden"  name="content" value="<?php echo $content ?> "> 	
     
    
	    <strong>Are you sure you want to delete the current entry? <?php  echo $content?> </strong> 
		
	<div id="buttons" style="margin-left:500px">
	
	
<input id="gobutton" type="submit" value="Yes" />
<a href="about.php"><input id="gobutton" type="button" value="No"  onclick="javascript:location.href = 'about.php';"/></a>

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
