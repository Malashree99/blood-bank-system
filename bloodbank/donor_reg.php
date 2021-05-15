
<?php


include('includes/head.php');
include('includes/navbar.php');
?>

<div class="row">

<?php
if(isset($_GET['s']))
{
  echo '<div class="alert alert-success">
  <strong>Success!</strong>WELCOME DONOR.
  </div>';
}
?>


<div class= "col col-md-3">
  <img class="img-responsive" src="img/d.png" width="100%" height="100%"  alt="Chania"><br>

	</div>
	<div class= "col col-md-6">
	
<div class="panel panel-danger">
  <div class="panel-heading"><center>register here as donor</center></div>
  <div class="panel-body">


  	<form action="reg_save.php" method="POST">

  <div class="form-group">
    <label for="email">NAME:</label>
    <input   name="Name" class="form-control" id="Name" required="yes">
  </div>

  <div class="form-group">
    <label for="pwd">Address:</label>
    <input type="Address"  name="Address" class="form-control" id="Address" required="yes">
  </div>
 
  <div class="form-group">
    <label>phone number:</label>
    <input type="number"  name="phone" maxlength="10"  class="form-control"  required="yes">
  </div>
  <div class="form-group">
    <label for="email">age:</label>
    <input type="number"  name="age" class="form-control" id="phone" required="yes">
  </div>


  <div class="form-group">
    <label >blood group:</label>

    	<select class="form-control"  name= "bloodgroup" required="yes">
	<option selected hidden value="0">select bloodgroup</option>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
  <option value="B+">B+</option>
	<option value="B-">B-</option>
	<OPTION value="AB+">AB+</OPTION>
	<option value="AB-">AB-</option>
	<OPTION VALUE="O+">O+</OPTION>
	<OPTION Value="O-">O-</OPTION>

	</select>
    
  </div>
  
   <label for="email">Email address:</label>
    <input type="email"  name="Ename" class="form-control">
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password"  name="Password" class="form-control" id="pwd" required="yes">
  </div>
<a href="login.php">
 <button type="submit" class="btn btn-success">update</button></a>
  <button type="reset" class="btn btn-danger">clear</button> 
</form>
</div>
</div>
</div>

<div class= "col col-md-3">
  <img class="img-responsive" src="img/a2.jpg" width="100%" height="100%"  alt="Chania">
  
  </div>
</div>



