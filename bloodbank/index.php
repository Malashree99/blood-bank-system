<!DOCTYPE html>
<html>

<?php

session_start();
unset($_SESSION['userid']);

include('includes/head.php')

?>

<body>
<?php
include('includes/navbar.php')
?>


<div class="row">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
 <div class="carousel-inner">

      <div class="item active">
        <img src="img/slider1.png" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>WELCOME</h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="img/slider2.png" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/slider1.png" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>KASCC</h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<hr>


<div class="container">
	
<div class="col col-md-4">
  
<div class="panel panel-primary">
  <div class="panel-heading">IMPORTANT RULES</div>
  <div class="panel-body">


<center>
  <img src="img/a3.jpg" width="100%" class="img img-responsive">
  <a  href="rules/why_should.php">1.Why should we donote blood?</a><br>
  <a  href="rules/prepartion.php">2.prepartion to donote blood.</a><br>
  <a  href="rules/who_donote.php">3.who can donote blood?</a><br>
  <a  href="rules/benefits.php">4.health benefits of blood donation</a><br>
  <a  href="rules/post_don_care.php">5.Post Donation Care</a><br>
</center>

</div>
</div>

</div>





<div class="col col-md-4">
	
<div class="panel panel-primary">
  <div class="panel-heading">REGISTER AS DONAR</div>
  <div class="panel-body">


<center>
	<a  href="donor_reg.php">
<img src="img/imgg.jpg" width="100%" class="img img-responsive">
</a>
</center>

</div>
</div>

</div>


<div class="col col-md-4">
	
<div class="panel panel-primary">
  <div class="panel-heading"><center>REGISTER AS BLOOD SEEKER</center></div>
  <div class="panel-body">
<center>
	<a  href="acceptor_reg.php">
<img src="img/bloodseeker.jpg" width="100%" class="img img-responsive">
</a>
</center>
</div>
</div>

</div>

</div>
<hr>
<div class="container">


<div class="col col-md-4">

  
</div>
	

<div class="col col-md-4">

	<a href="donor_login.php">
 <button type="button" class="btn btn-success btn-block">login</button></a>
</div>
<div class="col col-md-4">
<a href="accptor_login.php">
 <button type="button" class="btn btn-success btn-block">login</button></a>
</div>
</div>




<hr>
<div class="row">



<div class="container">
	<font style="text-align: justify;">
	<p>
		

<div class="siteorigin-widget-tinymce textwidget">
<h2>Blood Bank Management System</h2>
<p>Blood Bank Management System (BBMS) is a browser based system that is designed to store, process, retrieve and analyze information concerned with the administrative and inventory management within a blood bank. This project aims at maintaining all the information pertaining to blood donors, different blood groups available in each blood bank and help them manage in a better way. Aim is to provide transparency in this field, make the process of obtaining blood from a blood bank hassle free and corruption free and make the system of blood bank management effective.</p>
<h3>Features--&gt;</h3>
<p>- Blood Donation Camp &amp; Camp Organiser Management.<br>
- Donor Management - Donor Registration, Managing donor database, recording their physical and medical statistics.<br>

- Blood requisition and issuance of blood.<br>
- Online transfer of blood from one blood bank to another.<br>
- Discarding of expired and unsuitable blood (Less Qty., Reactive, Clotting, Hemolysis).<br>
- Being a web based system, can be implemented throughout the state. - - Separate user accounts can be created for each blood bank.<br>
- Patient Register/Blood Sample Receiving Register, Donor Register, Blood Issue Register and Discarded Blood report.<br>
- Fridge Wise Stock Position and Printing of Fridge Stickers.<br>
- List of Donors who are eligible for donation on a particular date with contact Number.<br>
</p>
<h3 class="notes">Brief overview of the technology:</h3>
<div id="pg-2292-0" class="panel-grid panel-no-style">
<div id="pgc-2292-0-0" class="panel-grid-cell">
<div id="panel-2292-0-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="0">
<div class="textwidget">
<p>Front end: HTML, CSS, JavaScript</p>
<ol>
<li>HTML: HTML is used to create and save web document. E.g. Notepad/Notepad++</li>
<li>CSS : (Cascading Style Sheets) Create attractive Layout</li>
<li>Bootstrap : responsive design mobile freindly site</li>
<li>JavaScript: it is a programming language, commonly use with web browsers.</li>
</ol>
<p>Back end: PHP, MySQL</p>
<ol>
<li>PHP: Hypertext Preprocessor (PHP) is a technology that allows software developers to create dynamically generated web pages, in HTML, XML, or other document types, as per client request. PHP is open source software.</li>
<li>MySQL: MySql is a database, widely used for accessing querying, updating, and managing data in databases.</li>
</ol>
<h3 id="requirement" class="notes">Software Requirement(any one)</h3>
<ul>
<li></li>
<li>XAMPP Server</li>
</ul>


</div>
</div>
</div>
</div>
<div id="pg-2292-1" class="panel-grid panel-no-style">
<div id="pgc-2292-1-0" class="panel-grid-cell">
<div id="panel-2292-1-0-0" class="so-panel widget widget_text panel-first-child panel-last-child" data-index="1">
<div class="textwidget">
<div class="" data-lock-id="onpLock358715">

</div>
</div>
</div>
</div>
</div>
</div>

	</p>
</font>
	
</div>

</div>


</body>
</html>
<?php








?>
