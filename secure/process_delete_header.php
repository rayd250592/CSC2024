<?php

include('../connect.php');

$id = $_POST['id'];
$sentfilename = $_FILES['header']['name'];
$sentfiletemp = $_FILES['header']['tmp_name'];

//echo $sentfilename;
$target = '../img/header/'.$sentfilename;






$query = "DELETE FROM header WHERE HeaderID='$id'";
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

	<h1 style="margin-left:10px" > Record Deleted </h1>


<p>Record deleted. Click <a href="header.php">here</a> to return.</p>


</div>

</div>



  <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>

</div>

</body>



</html>