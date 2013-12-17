<?php

include('../connect.php');

$content = $_POST['content'];
$sentfilename = $_FILES['image']['name'];
$sentfiletemp = $_FILES['image']['tmp_name'];


//echo $sentfilename;
$target = '../img/home/'.$sentfilename;
//echo $sentfiletemp;
//echo $target;

if(!empty($sentfilename)){
move_uploaded_file($sentfiletemp, "../img/home/$sentfilename");
}else{

echo "<p> No file selected </p>";
die();

}
$query = "INSERT INTO homepage(imagepath, content) VALUES('$sentfilename','$content')";
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


<p>Record added. Click <a href="edit_index.php">here</a> to return.</p>


</div>

</div>



  <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>

</div>

</body>



</html>