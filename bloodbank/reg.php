
<?php


include('includes/head.php');
include('includes/navbar.php');
?>

<div class="row">

<?php
if(isset($_GET['s']))
{
  echo '<div class="alert alert-success">
  <strong>Success!</strong>Data is saved.
  </div>';
}
?>


<div class= "col col-md-3">
	</div>
	<div class= "col col-md-6">
	
<div class="panel panel-danger">
  <div class="panel-heading"><center>register here as accepter</center></div>
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

    	<select class="form-control" tag name= "bloodgroup" required="yes">
	<option selected hidden value="0">select bloodgroup</option>
	<option value="1">A+</option>
	<option value="2">A-</option>
     <option value="3">B+</option>
	<option value="4">B-</option>
	<OPTION value="5">AB+</OPTION>
	<option value="6">AB-</option>
	<OPTION VALUE="7">O+</OPTION>
	<OPTION Value="8">O-</OPTION>

	</select>
    
  </div>
   <label for="email">Email address:</label>
    <input type="email"  name="Ename" class="form-control">
  
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password"  name="Password" class="form-control" id="pwd" required="yes">
  </div>

 <button type="submit" class="btn btn-success">update</button>
  <button type="reset" class="btn btn-danger">clear</button> 
</form>
</div>
</div>
</div>
</div>



