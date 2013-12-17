<?php

include('../connect.php');

$id = $_POST['id'];
$content = $_POST['content'];
$filename = $_FILES['imageedit']['name'];
$sentfiletemp = $_FILES['imageedit']['tmp_name'];
$imagepath = $_POST['imgpath'];


//echo $filename;
$target = '../img/home/'.$sentfilename;
//echo $sentfiletemp;
//echo $id;
//echo $content;


if(!empty($filename)){
move_uploaded_file($sentfiletemp, "../img/home/$filename");
}else{

$filename= $imagepath;
//die();

}
$query = "UPDATE homepage SET imagepath='$filename', content='$content' WHERE ArticleID = $id";
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


<p>Record updated. Click <a href="edit_index.php">here</a> to return.</p>


</div>

</div>



  <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>

</div>

</body>



</html>