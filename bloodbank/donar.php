<?php
session_start();

if(isset($_SESSION['donorid']))
{


include('includes/navbar_donar.php');

include('includes/head.php');





}

else
{
	echo "<h1> YOU ARE NOT AURTHORISED TO ACCESS THIS PAGE</h1>";
}
?>

<div class="row">
	
<div class="col col-md-12">
	<img src="img/admin_home - Copy.jpg" width="100%" class="img img-responsive">
</div>

</div>