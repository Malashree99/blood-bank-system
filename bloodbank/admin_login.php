<?php


include('includes/head.php');


?>
<br><br>
<div class="row">



<div class= "col col-md-3">
	</div>
	<div class= "col col-md-6">
	
<div class="panel panel-danger">
  <div class="panel-heading"><center>login here</center></div>
  <div class="panel-body">
  	<form action="admin_login_save.php" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email"  name="Ename" class="form-control" id="email" required="yes">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password"  name="Password" class="form-control" id="pwd" required="yes">
  </div>
  
  <a href="admin.php"><button type="submit" class="btn btn-danger">Submit</button></a>
</form>
</div>
</div>
</div>
</div>
