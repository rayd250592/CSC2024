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
      
     <form action="process_about.php" method="POST">
     
    
	    <strong>Title: </strong> 
		<br> <input type="text"  name="title" value="About the Company"> 		
		<br>
		<br>
<strong>Content:</strong>	<br>
	<textarea cols="80" name="content">Based on Malone Road, belfast, Raymond's PC's is the place to go for all your desktop and laptop needs!</textarea>
	<br>
	<br>
		
<input id="gobutton" type="submit" value="Submit" style="margin-left:700px"/>

</form>
        
        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
