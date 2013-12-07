<!DOCTYPE html>
<html>
<head>
<?php 

session_start();


include 'header.php'; 

$uname = $_POST['user'];
$pass = $_POST['userpassword'];

//echo $uname;
//echo $pass;



include('connect.php');

$query = "select * FROM logins WHERE username='$uname' and pword='$pass'";
$result = mysql_query($query) or die(mysql_error());

$count = mysql_num_rows($result);
//echo $query;








?>
<title>Raymond's PC's</title>

<link rel="stylesheet" type="text/css" href="styles/css.css" />
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
     
		<h1 style="margin-left:10px" > Login Process </h1>
		
		<?php 
		
		
		if($count > 0)
{
//user has put in the correct credentials

$_SESSION['csc2024_40043298'] = $uname;


echo "<p> You have logged on. Click <a href='secure/index.php'>here</a> to edit.</p>";
}

else

{

echo "<p>Your password or username is incorrect, click <a href='login.php'>here</a> to try again.</p>";

}

		
		
		?>





        
        </div>
        </div>
        <div id="footerwrap">
        
        <?php include 'footer.php'; ?>
        
        </div>
    </div>
</body>
</html>



