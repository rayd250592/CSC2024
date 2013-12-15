<?php

session_start();

if (!isset($_SESSION['csc2024_40043298']))

{

$URL = '../login.php';
header ("Location: $URL");
}

?>

<html>
<head>
<?php include 'secureheader.php'; ?>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="../styles/css.css">
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
     
		<h1 style="margin-left:10px" > Edit Menu </h1>
		
			<table style="width: 100%; border:thick">
			
				<tr>
					<td style="text-align:center"><a href="edit_index.php"><input id="gobutton" type="submit" value="Homepage" /></a></td>
					<td style="text-align:center">Edit the "Homepage"</td>
				</tr>
				<tr>
					<td style="text-align:center"><a href="about.php"><input id="gobutton" type="submit" value="About the Company" /></a></td>
					<td style="text-align:center">Edit the "About the Company Page"</td>
				</tr>
				<tr>
					<td style="text-align:center"><a href="edit_company_history.php"><input id="gobutton" type="submit" value="Company History" /></a></td>
					<td style="text-align:center">Edit the "Company History"</td>
				</tr>
				<tr>
					<td style="text-align:center"><a href="cust_charter.php"><input id="gobutton" type="submit" value="Customer Charter" /></a></td>
					<td style="text-align:center">Edit the "Customer Charter"</td>
				</tr>
				<tr>
					<td style="text-align:center"><a href="products.php"><input id="gobutton" type="submit" value="Products" /></a></td>
					<td style="text-align:center">Edit the "Products" Page</td>
				</tr>
				<tr>
					<td style="text-align:center"><a href="header.php"><input id="gobutton" type="submit" value="Header" /></a></td>
					<td style="text-align:center">Edit the Header</td>
				</tr>
				<tr>
					<td style="text-align:center"><a href="footer.php"><input id="gobutton" type="submit" value="Footer" /></a></td>
					<td style="text-align:center">Edit the Footer</td>
				</tr>
				<tr>
					<td style="text-align:center"><a href="changecolour.php"><input id="gobutton" type="submit" value="Change Background Colour" /></a></td>
					<td style="text-align:center">Change Background Colour</td>
				</tr>

				<tr>
					<td style="text-align:center"><a href="documents.php"><input id="gobutton" type="submit" value="View Documents" /></a></td>
					<td style="text-align:center">View Website Documents</td>
				</tr>

						</table>
		
		<table>
		
		
		</table>
		
	
	    
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>
