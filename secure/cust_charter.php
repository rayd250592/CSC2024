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
        
   <h1>Edit Customer Charter Page</h1>
     
		<strong>Title: </strong><input type="text" value="Edit Customer Charter">
		
		<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	
		<textarea cols="80">Raymond's PC's staff are committed to providing first class customer service and ensuring that you are happy with every part of our services. 
		We have looked after thousands of customers and have a very loyal customer base. 
		We are always looking to improve our service so please get in touch with any ideas or suggestions!</textarea>
		
		<br>
		<br>
		
		
		<strong>Title: </strong><input type="text" style="width:300px" value="1. Provide a First Class Customer Service">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>


	
		
	    	<textarea cols="80">
	    	
	    	Raymond's PC's staff understand the importance of ensuring that they arrive at your home or business as quickly as possible and at the time agreed.
	     	We aim to repair 99% of issues without having to take any equipment away. 
	     	In the rare event that any equipment that is taken away for repair or further diagnosis, we will provide you with an expectation of when it will be returned.
			Where spare parts need to be sourced, your PC PAL Engineers aim to carry an extensive range of spare parts. 
			If we need to order specific parts, we will contact you to gain authorisation (with estimated time of arrival) for delivery upon acceptance of our quotation for parts.

</textarea>

<br>
<br>

<strong>Title: </strong><input type="text" style="width:300px" value="2. Prompt and Clear Communication">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>

		
	 	<textarea cols="80">
	 	Raymond's PC's staffunderstand the importance of answering your call and aim to answer all calls within 5 rings.
	    If we are unable to answer immediately (as we may be speaking to another customer), then we will return your call within the hour. 
	    We will also provide prompt replies via email.
	    </textarea>
	    
	    <br>
	    <br>
	    

<strong>Title: </strong><input type="text" style="width:300px" value="3. Clear and Simple Pricing">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	    		
	<textarea cols="80">
	
	"Raymond's PC's aim to provide clear pricing information before commencing any work for you and will provide 
	 a fixed price for the supply of new or replacement spare parts in advance for your authorisation.
	
 </textarea>
	    
<br>
<br>

<strong>Title: </strong><input type="text" style="width:300px" value="4. Payment and Receipts">
		
			<br>
		<br>
		
	<strong>Content: </strong>
	
	<br>
	<br>
	    		
	<textarea cols="80">
			
			
	Raymond's PC's aim to ensure we provide convenient payment methods including Cash, Company Cheque, Debit and Credit cards.
	    
	Payments will be taken via our secure website and a full receipt or invoice will be provided
	
	</textarea>


<a href="company_history.php"><input id="gobutton" type="submit" value="Submit" style="margin-left:700px"/></a>    



        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
