<?php

include('../connect.php');

$id = $_POST['id'];
$machinename = $_POST['name'];
$processor = $_POST['processor'];
$hdd = $_POST['hdd'];
$ram = $_POST['ram'];
$os = $_POST['os'];
$graphics = $_POST['graphics'];
$price = $_POST['price'];
$imagepath = $_POST['imgpath'];
$sentfilename = $_FILES['image']['name'];
$sentfiletemp = $_FILES['image']['tmp_name'];


//echo $sentfilename;
$target = '../img/home/'.$sentfilename;
//echo $machinename;
//echo $processor;
//echo $hdd;
//echo $ram;
//echo $os;
//echo $graphics;
//echo $price;
//echo $sentfiletemp;
//echo $target;

if(!empty($sentfilename)){
move_uploaded_file($sentfiletemp, "../img/products/$sentfilename");
}else{

$sentfilename= $imagepath;
//die();

}
$query = "UPDATE products SET machinename='$machinename', processor='$processor', hdd='$hdd', ram='$ram', os='$os', graphics='$graphics', price= '$price', imagepath='$sentfilename' WHERE ProductID='$id'";
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

	<h1 style="margin-left:10px" > Record Updated </h1>


<p>Record updated. Click <a href="products.php">here</a> to return.</p>


</div>

</div>



  <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>

</div>

</body>



</html>