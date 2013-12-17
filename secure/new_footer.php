<?php

session_start();

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

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
     
		<h1 style="margin-left:10px" > New Footer Record</h1>

  <form action="process_new_footer.php" method="POST">

			
			
			<strong>Line 1: </strong>
			<br>
			<br>
<textarea name="line1"></textarea>
			<br>
			<br>
			<strong>Line 2: </strong>
			<br>
			<br>
<textarea name="line2"></textarea>
			
			<br>
			<br>
			<strong>Line 3: </strong>
			<br>
			<br>
<textarea name="line3"></textarea>
			<br>
			<br>
			
<div id="buttons" style="margin-left:600px">
	

<input id="gobutton" type="submit" value="Submit" />
<a href="footer.php"><input id="gobutton" type="button" value="Back" onclick="javascript:location.href = 'footer.php'" /></a>

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
