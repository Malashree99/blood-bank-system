<?php
session_start();

if(isset($_SESSION['acc_id']))
{


include('includes/navbar_acceptor.php');

include('includes/head.php');
}

else
{
	echo "<h1> YOU ARE NOT AURTHORISED TO ACCESS THIS PAGE<h1>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<style >
body{

background-image:url(blood.jpg);
background-size: 100%;



}	


</style>