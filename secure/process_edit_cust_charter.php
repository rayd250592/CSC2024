<?php
$id = $_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$title1 = $_POST['title1'];
$content1 = $_POST['content1'];
$title2 = $_POST['title2'];
$content2 = $_POST['content2'];
$title3 = $_POST['title3'];
$content3 = $_POST['content3'];
$title4 = $_POST['title4'];
$content4 = $_POST['content4'];


$s_title = addslashes($title);
$s_content = addslashes($content);

$s_title1 = addslashes($title1);
$s_content1 = addslashes($content1);

$s_title2 = addslashes($title2);
$s_content2 = addslashes($content2);

$s_title3 = addslashes($title3);
$s_content3 = addslashes($content3);

$s_title4 = addslashes($title4);
$s_content4 = addslashes($content4);



include('../connect.php');

$query = "UPDATE customercharter SET title='$s_title', content='$s_content', title1='$s_title1', content1='$s_content1', title2='$s_title2', content2='$s_content2', title3='$s_title3', content3='$s_content3', title4='$s_title4', content4='$s_content4' WHERE ArticleID = $id";
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


<p>Record updated. Click <a href="cust_charter.php">here</a> to return.</p>


</div>

</div>



  <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>

</div>

</body>



</html>