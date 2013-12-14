<!DOCTYPE html>
<html>
<head>
<?php include 'header.php'; 


$query = "SELECT title, content, title1, content1, title2, content2, title3, content3, title4, content4 FROM customercharter ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$title = mysql_result($display, $i, "title");
$content = mysql_result($display, $i, "content");

$title1 = mysql_result($display, $i, "title1");
$content1 = mysql_result($display, $i, "content1");


$title2 = mysql_result($display, $i, "title2");
$content2 = mysql_result($display, $i, "content2");


$title3 = mysql_result($display, $i, "title3");
$content3 = mysql_result($display, $i, "content3");


$title4 = mysql_result($display, $i, "title4");
$content4 = mysql_result($display, $i, "content4");



?>
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
     
		<h1 style="margin-left:10px" ><?php echo $title?></h1>
		
		<p style="margin-left:10px"><?php echo $content?></p>
		
		<h2 style="margin-left:10px" ><?php echo $title1?></h2>
		
	    <p style="margin-left:10px"><?php echo $content1?></p>

<h2 style="margin-left:10px" ><?php echo $title2?></h2>
		
	    <p style="margin-left:10px"><?php echo $content2?></p>
	    
	    <h2 style="margin-left:10px" ><?php echo $title3?></h2>
		
	    <p style="margin-left:10px"><?php echo $content3?></p>
	    
	     <h2 style="margin-left:10px" ><?php echo $title4?></h2>
		
	    <p style="margin-left:10px"><?php echo $content4?></p>

        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>
