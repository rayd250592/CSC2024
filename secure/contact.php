<!DOCTYPE html>
<html>
<head>
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
     
		<h1 style="margin-left:10px" > Contact Us </h1>


<form action="" method="post">
	        
	        <p><label>Name: </label>
	        <input type="text" name="user" required style="margin-left:20px;" />
	        </p>
	        <p><label>Email: </label>
	        <input type="text" name="pass" required  />
	        </p>
	        <p><label>Message: </label>
	   <textarea id="comment" name="message" cols="22"></textarea>
	        </p>

	        <input type="submit" value="Submit" />
	    
	        
	        
	        
	        
	        
	        </form>
	        
        
        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
