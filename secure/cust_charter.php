<?php

session_start();

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

include('../connect.php');


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
        
        tinymce.init({
        
        selector:'textarea'
  
        
        
        });


tinymce.init({
        
        selector:'textarea'
  
        
        
        });
        
        inymce.init({
        
        selector:'textarea'
  
        
        
        });


inymce.init({
        
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
        
     <form action="process_edit_cust_charter.php" method="post">
     
     <input type="hidden" name="id" value=<?php echo $id?>>
        
   <h1>Edit Customer Charter Page</h1>
     
		<strong>Title: </strong><input type="text" name="title" value=<?php echo $title?>>
		
		<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	
		<textarea cols="80" name="content"><?php echo $content?></textarea>
		
		<br>
		<br>
		
		
		<strong>Title: </strong><input type="text" style="width:300px" name="title1"value=<?php echo $title1?>>
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>


	
		
	    	<textarea cols="80" name="content1">
	    	
	   <?php echo $content1?>

</textarea>

<br>
<br>

<strong>Title: </strong><input type="text" style="width:300px" name="title2" value="<?php echo $title2?>">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>

		
	 	<textarea cols="80" name="content2">
	<?php echo $content2?>	    </textarea>
	    
	    <br>
	    <br>
	    

<strong>Title: </strong><input type="text" style="width:300px" name="title3" value="<?php echo $title3?>">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	    		
	<textarea cols="80" name="content3">
	
<?php echo $content3?>
	
 </textarea>
	    
<br>
<br>

<strong>Title: </strong><input type="text" style="width:300px" name="title4"value="<?php echo $title4?>">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	    		
	<textarea cols="80" name="content4">
			
			
<?php echo $content4?>	</textarea>
	
	<br>
	<br>


<div id="buttons" style="margin-left:500px">
	
<a href="new_cust_charter.php"><input id="gobutton" type="button" value="New" onclick="javascript:location.href = 'new_cust_charter.php'"/></a>
<a href="delete_cust_charter.php"><input id="gobutton" type="button" value="Delete" onclick="javascript:location.href = 'delete_cust_charter.php'"/></a>
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
