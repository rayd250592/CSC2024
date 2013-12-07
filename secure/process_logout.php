<?php 

session_start();

include 'secureheader.php'; 

$uname = $_POST['user'];
$pass = $_POST['userpassword'];

//echo $uname;
//echo $pass;


include('../connect.php');

$query = "select * FROM logins WHERE username='$uname' and pword='$pass'";
$result = mysql_query($query) or die(mysql_error());

$count = mysql_num_rows($result);
//echo $query;

?>

<!DOCTYPE html>
<html>
<head>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="../styles/css.css" />
</head>
<body style="background-color:silver">
    <div id="wrapper">
        <div id="headerwrap">
     
                  


 </div>
       
        <div id="leftcolumnwrap">

       
<?php include 'menu.php'; ?>

        </div>
        <div id="contentwrap">
        <div id="content">
     
		<h1 style="margin-left:10px" > Logout Process </h1>
		
<?php


if(isset($_SESSION['csc2024_40043298']))
{

	unset($_SESSION['csc2024_40043298']);
	echo "<p>You have now logged out. Click <a href='../'>here</a> to go back.</p>";
}

else

{

header("Location: login.php");
}

?>


        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'securefooter.php'; ?>
        
        </div>
    </div>
</body>
</html>



