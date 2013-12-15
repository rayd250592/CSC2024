<?php
include 'connect.php';


$query = "SELECT hexvalue from colour";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$colour = mysql_result($display, $i, "hexvalue");


//echo $title;
//echo $content;


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
                  
<img alt="heder "src="img/header.png" style="margin-left:300px">

 </div>
        </div>

</div>
</body>

</html>
