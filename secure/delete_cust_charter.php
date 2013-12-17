<?php

session_start();
include('../connect.php');

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

$query = "SELECT ArticleID, title, content, title1, content1, title2, content2, title3, content3, title4, content4 FROM customercharter ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$id = mysql_result($display, $i, "ArticleID");

$title = mysql_result($display, $i, "title");
$content = mysql_result($display, $i, "content");

$title1 = mysql_result($display, $i, "title1");
$content1 = mysql_result($display, $i, "content1");


$title2 = mysql_result($display, $i, "title2");
$content2 = mysql_result($display, $i, "content2");


$title3 = mysql_result($display, $i, "title3");
$content3 = mysql_result($display, $i, "content3");


$title4 = mysql_result($display, $i, "title4");
$content4 = mysql_result($display, $i, "content4");


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
     
      <h1>Delete Customer Charter Record?</h1>
      
     <form action="process_delete_cust_charter.php" method="POST">
     
     <br> <input type="hidden"  name="id" value="<?php echo $id ?> "> 	
     
     
    
	    <strong>Are you sure you want to delete the current entry?
	    
  <?php  echo $title?> 
  <br>
  <br>
  <?php  echo $content?> 
  <br>
  <br>
  <?php  echo $title1?> 
  <br>
  <br>
  <?php  echo $content1?> 
   <br>
    <br>
  <?php  echo $title2?> 
   <br>
    <br>
  <?php  echo $content2?> 
   <br>
    <br>
  <?php  echo $title3?>
   <br>
    <br>
  <?php  echo $content3?>
   <br>
    <br>
  <?php  echo $title4?>
   <br>
    <br>
  <?php  echo $content4?> 
   <br>
    <br> 
 
 </strong> 
		
	<div id="buttons" style="margin-left:500px">
	
	
<input id="gobutton" type="submit" value="Yes" />
<a href="cust_charter.php"><input id="gobutton" type="button" value="No" onclick="javascript:location.href = 'cust_charter.php'" /></a>

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
