<?php
//include 'connect.php';
$query = "SELECT line1, line2, line3 FROM footer ORDER BY ArticleID DESC LIMIT 1";

$display = mysql_query($query) or die (mysql_error());

//echo $display;

$i = 0;

$line1 = mysql_result($display, $i, "line1");
$line2 = mysql_result($display, $i, "line2");
$line3 = mysql_result($display, $i, "line3");

?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link rel="stylesheet" type="text/css" href="styles/css.css" />
</head>

<body>

 
<div id="footer">


	<table style="width: 100%">
		<tr>
			<td style="width: 500px">
			
			<a class="twitter-timeline" href="https://twitter.com/raycomputers" data-chrome="transparent" data-widget-id="405828694419075073">Tweets by @raycomputers</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


			
			</td>
			<td style="text-align:right; color:white">
			<?php echo $line1 ?>
			<br>
		    <?php echo $line2 ?>
			<br>
			<?php echo $line3 ?>
						
			</td>
		</tr>
	</table>


</div>

  
 
</body>

</html>
