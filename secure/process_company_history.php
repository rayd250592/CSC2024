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
     
		     <h1>Edit Company History </h1>
			<strong>Title: </strong> 
		<br> <input type="text" value="About the Company"> 		
		<br>
		<br>
		<strong>Content: </strong>
		<br>

<textarea cols="80" style="text-align:left">
		Raymond's PC's opened it doors in 2001. We have been trading now for nearly 10yrs.
		We started off with small premises which served their purpose for 7 years. 
		We finally outgrew these and moved to brand new purpose built retail unit just 300yards from our old place.  
		We felt it was important not to lose our considerable customer base by moving too far
		At nearly 5 times the size of the old premises we believe it would give us the opportunity to give a better choice with more stock and a bigger 
		and better workshop. Having been in the new premises for 2 years now we can say it was a worthwile move.
</textarea>

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
