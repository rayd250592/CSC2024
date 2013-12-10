<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; ?>
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
     
		<h1 style="margin-left:10px" > Submit a Question </h1>
		
			        <form action="process_login.php" method="POST">
	        
	        <p><label>Name: </label>
	        <input type="text" name="user" required style="margin-left:25px"/>
	        </p>
	        <p><label>Question: </label>
	        <textarea name="question" cols="80"></textarea>
	        </p>
            <input type="submit" value="Submit" id="gobutton" style="margin-left:520px" />
	    
	        
	        
	        
	        
	        
	        </form>
	        

		
		
		
        
        

        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>
