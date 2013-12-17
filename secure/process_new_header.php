<?php

$sentfilename = $_FILES['header']['name'];
$sentfiletemp = $_FILES['header']['tmp_name'];

$target = '../img/home/'.$sentfilename;
//echo $sentfiletemp;

if(!empty($sentfilename)){
move_uploaded_file($sentfiletemp, "../img/header/$sentfilename");
}else{

echo "<p> No file selected </p>";
die();

}





include('../connect.php');

$query = "INSERT INTO header(imagepath) VALUES('$sentfilename')";
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


<p>Record added. Click <a href="header.php">here</a> to return.</p>


</div>

</div>



  <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>

</div>

</body>



</html>