<?php
session_start();

if(isset($_SESSION['userid']))
{

include('includes/navbar_admin.php');

include('includes/head.php');




?>


<div class="row">
	
<div class="col col-md-12">
	<img src="img/admin_home.jpg" width="100%" class="img img-responsive">
</div>

</div>


<?php
}
else
{
	echo "<h1> YOU ARE NOT AURTHORISED TO ACCESS THIS PAGE<h1>";
}
?>