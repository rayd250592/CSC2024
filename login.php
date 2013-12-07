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
     
		<h1 style="margin-left:10px" > Login </h1>
		
	        
	        <form action="process_login.php" method="POST">
	        
	        <p><label>Username: </label>
	        <input type="text" name="user" required />
	        </p>
	        <p><label>Password: </label>
	        <input type="password" name="userpassword" required />
	        </p>
	        <input type="submit" value="login" id="gobutton" style="margin-left:125px" />
	    
	        
	        
	        
	        
	        
	        </form>
	        
        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>
