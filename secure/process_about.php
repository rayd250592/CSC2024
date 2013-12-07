<!DOCTYPE html>
<html>
<head>
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
     
     
     <h1>Edit About the Company</h1>
			<strong>Title: </strong> 
		<br> <input type="text" value="About the Company"> 		
		<br>
		<br>
<strong>Content:</strong>	<br>
	<textarea cols="80">Based on Malone Road, belfast, Raymond's PC's is the place to go for all your desktop and laptop needs!</textarea>
	<br>
	<br>
		
<a href="company_history.php"><input id="gobutton" type="submit" value="Submit" style="margin-left:700px"/></a>    
        
        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
