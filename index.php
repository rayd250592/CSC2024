<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';

include 'connect.php';


$query = "SELECT ArticleID, imagepath, content FROM homepage ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$id = mysql_result($display, $i, "ArticleID");
$imagepath = mysql_result($display, $i, "imagepath");
$content = mysql_result($display, $i, "content");

$target = 'img/home/'.$imagepath;


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
     
		<h1 style="margin-left:10px" > Home </h1>
		
		
		
			<table style="width: 100%">
				<tr>
					<td><img src="<?php echo $target ?>" alt="homepage logo" /></td>
					<td><p><?php echo $content ?></p></td>
				</tr>
			</table>
		
		
		

		
		
		

        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>
