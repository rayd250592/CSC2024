<?php

session_start();

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

include('../connect.php');

$query = "SELECT ArticleID, line1, line2, line3 FROM footer ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$id= mysql_result($display, $i, "ArticleID");
$line1 = mysql_result($display, $i, "line1");
$line2 = mysql_result($display, $i, "line2");
$line3 = mysql_result($display, $i, "line3");


?>


<!DOCTYPE html>
<html>
<head>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
        tinymce.init({
        
        selector:'textarea'
  
        
        
        });
        
        tinymce.init({
        
        selector:'textarea'
  
        
        
        });


tinymce.init({
        
        selector:'textarea'
  
        
        
        });


        
</script>


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
     
		<h1 style="margin-left:10px" > Delete Footer Record </h1>

  <form action="process_delete_footer.php" method="POST">

<input type="hidden"  name="id" value="<?php echo $id?>"/>
			
<strong>Are you sure you want to delete this record?</strong>		
<br>
<br>	
				

<strong>Line 1: </strong><p><?php echo $line1 ?></p>
<strong>Line 2: </strong><p><?php echo $line2 ?></p>
<strong>Line 3: </strong><p><?php echo $line3 ?></p>

<div id="buttons" style="margin-left:500px">
	
<a href="new_footer.php"><input id="gobutton" type="submit" value="Yes"/></a>
<a href="footer.php"><input id="gobutton" type="button" value="No"/></a>

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
