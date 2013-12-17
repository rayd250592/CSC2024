<?php
$title = $_POST['title'];
$content = $_POST['content'];
$id = $_POST['id'];

//echo $title;
//echo $content;
$s_title = addslashes($title);
$s_content = addslashes($content);
//echo $s_title;
//echo $s_content;



include('../connect.php');

$query = "UPDATE aboutcompany SET title='$s_title', content='$s_content' WHERE ArticleID = $id";
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


<p>Record updated. Click <a href="about.php">here</a> to return.</p>


</div>

</div>



  <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>

</div>

</body>



</html>