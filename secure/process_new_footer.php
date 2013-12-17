<?php
$line1 = $_POST['line1'];
$line2 = $_POST['line2'];
$line3 = $_POST['line3'];

$s_line1 = addslashes($line1);
$s_line2 = addslashes($line2);
$s_line3 = addslashes($line3);

//echo $s_line1;
//echo $s_line2;
//echo $s_line3;




include('../connect.php');

$query = "INSERT INTO footer(line1, line2, line3) VALUES('$s_line1','$s_line2','$s_line3')";
//echo $query;
mysql_query($query) or die(mysql_error());
mysql_close();

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../styles/css.css">
<?php include('secureheader.php'); ?>

</head>

<body>

<div id="wrapper">
        <div id="headerwrap">
     
                  


 </div>
       
        <div id="leftcolumnwrap">

       
<?php include 'menu.php'; ?>

        </div>

 <div id="contentwrap">
        <div id="content">

	<h1 style="margin-left:10px" > Record Added </h1>


<p>Record added. Click <a href="footer.php">here</a> to return.</p>


</div>

</div>



  <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>

</div>

</body>



</html>