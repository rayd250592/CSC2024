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
     
      <h1>New Customer Charter Record</h1>
      
     <form action="process_new_cust_charter.php" method="post">
     

		<strong>Title: </strong><input type="text" value="" name="title">
		
		<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	
		<textarea cols="80" name="content"></textarea>
		
		<br>
		<br>
		
		
		<strong>Title: </strong><input type="text" style="width:300px" value="" name="title1">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>


	
		
	    	<textarea cols="80" name="content1">
	    	
	 

</textarea>

<br>
<br>

<strong>Title: </strong><input type="text" style="width:300px" value="" name="title2">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>

		
	 	<textarea cols="80" name="content2" >
		</textarea>
	    
	    <br>
	    <br>
	    

<strong>Title: </strong><input type="text" style="width:300px" value="" name="title3">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	    		
	<textarea cols="80" name="content3">
	
 </textarea>
	    
<br>
<br>

<strong>Title: </strong><input type="text" style="width:300px" value="" name="title4">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	    		
	<textarea cols="80" name="content4">
			
	</textarea>
	
	<br>
	<br>


<input id="gobutton" type="submit" value="Submit" style="margin-left:600px"/>
<a href="cust_charter.php"><input id="gobutton" type="button" value="Back" onclick="javascript:location.href = 'cust_charter.php'" /></a>
	

    



</form>
        
        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
