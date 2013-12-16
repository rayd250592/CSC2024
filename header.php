<?php
include 'connect.php';


$query = "SELECT hexvalue from colour";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$colour = mysql_result($display, $i, "hexvalue");


//echo $title;
//echo $content;



$queryimage = "SELECT imagepath FROM header ORDER BY HeaderID DESC LIMIT 1";

$displayimage = mysql_query($queryimage) or die (mysql_error());

//echo $display;

$x = 0;


$imagepath = mysql_result($displayimage, $x, "imagepath");


$target = 'img/header/'.$imagepath;


 ?>


<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" type="text/css" href="styles/css.css" />
</head>

<body>

 <div id="wrapper">
        <div id="headerwrap">
        <div id="header">
                  
<img alt="heder "src="<?php echo $target ?>" style="margin-left:270px" width="392px" height="80px">
 </div>
        </div>

</div>
</body>

</html>
