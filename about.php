<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';


//include('connect.php');

$query = "SELECT title, content FROM aboutcompany ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$title = mysql_result($display, $i, "title");
$content = mysql_result($display, $i, "content");

//echo $title;
//echo $content;


 ?>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="styles/css.css" />
</head>
<body style="background-color:<?php echo $colour ?>">
    <div id="wrapper">
        <div id="headerwrap">
     
                  


 </div>
       
        <div id="leftcolumnwrap">

       
<?php include 'menu.php'; ?>

        </div>
        <div id="contentwrap">
        <div id="content">
     
		<h1 style="margin-left:10px" > <?php echo $title ?> </h1>
		
		
		<p> <?php echo $content ?></p>
		
<div id="map" style="margin-left:10px">

<iframe width="300" height="300"  src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=18+Malone+Road+Belfast&amp;ie=UTF8&amp;hq=&amp;hnear=18+Malone+Rd,+Belfast+BT9+6SJ,+United+Kingdom&amp;t=m&amp;ll=54.573455,-5.946608&amp;spn=0.014926,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=+&amp;q=18+Malone+Road+Belfast&amp;ie=UTF8&amp;hq=&amp;hnear=18+Malone+Rd,+Belfast+BT9+6SJ,+United+Kingdom&amp;t=m&amp;ll=54.573455,-5.946608&amp;spn=0.014926,0.025749&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>


</div>       
        
        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>
