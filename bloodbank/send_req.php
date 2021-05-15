<?php

include('includes/head.php');

include('includes/navbar_acceptor.php');

?>

<div class="row">
<?php
//if(isset($_GET['s']))
//{
  //echo '<div class="alert alert-success">
  //<strong>Success!</strong>Data is saved.
  //</div>';
//}
//?>
<div class= "col col-md-3">
    <img class="img-responsive" src="img/req.jpg" width="100%" height="100%"  alt="Chania"><br>

 	</div>
	<div class= "col col-md-6">
	
<div class="panel panel-danger">
  <div class="panel-heading"><center>send request</center></div>
  <div class="panel-body">
  	<form action="send_req_save.php" method="POST">
  
  <div class="form-group">
    <label >Name:</label>
    <input type="text"  name="name" class="form-control"  required="yes">
  </div>
  
  
   

<div class="form-group">
    <label>phone number:</label>
    <input type="number"  name="phone" maxlength="10"  class="form-control"  required="yes">
  </div>
  <div class="form-group">
    <label >blood requried:</label>

      <select class="form-control" name= "bloodgroup" required="yes">
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
  <div class="date">
    <label>when required:</label>
    <input type="date"  name="date" class="form-control" id="date" required="yes">
  </div> <br> 

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email"  name="Ename" class="form-control" id="email" required="yes">
  </div>
<div class="form-group">
    <label >Details:</label>
    <input type="text"  name="Details" class="form-control" id="email" required="yes" size="30">
  </div>
  <a href=""><button type="submit" class="btn btn-danger">Submit</button></a>
</form>
</div>
</div>
</div>
</div>