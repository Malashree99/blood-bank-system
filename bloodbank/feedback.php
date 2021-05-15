<?php
include('includes/head.php');
include('includes/navbar_donar.php')





?>
<?php
if(isset($_GET['s']))
{
  echo '<div class="alert alert-success">
  <strong>Success!</strong>FEEDBACK SENT SUCCESSFULLY.
  </div>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="feedback_save.php" method="POST">
<div class="container">
	<div class="panel panel-primary">
  <div class="panel-heading"><center>FEEDBACK</center></div>
  <div class="panel-body">



  
  <textarea class="form-control" rows="5" id="comment" name="feedback"></textarea><br>
  <button type="submit" class="btn btn-success btn-block">SEND</button>
  </div>
</div>
</div>


</form>
</body>
<STYLE>
body{

background-image:url(img/1.jpg);
background-size: 100%;
}
textarea#comment {
    border: 25px solid black;
    }


h1 {
    font-style: italic;
    font-family: sans-serif;
    color: #eee;
}
</STYLE>

</html>