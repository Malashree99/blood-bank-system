<?php

include('includes/head.php');

include('includes/navbar_admin.php');


?>
<head>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
</head>
<h1> CLICK TO KNOW THE LIST OF DONOR:-</h1>
<div class="row">
<div class= "col col-md-3">
	<a href="A+.php"><div class="panel panel-default">
  <div class="panel-body"><center>
<button type="button" class="blood">A+</button></center>
</div></div></a>
</div>
<div class= "col col-md-3">
	<a href="A-.php"><div class="panel panel-default">
  <div class="panel-body">
  	<center>
<button type="button" class="blood">A-</button></center>
</div></div></a>
</div>
<div class= "col col-md-3">
<a href="B+.php"><div class="panel panel-default">
  <div class="panel-body"><center>
<button type="button" class="blood">B+</button></center>
</div></div></a>
</div>
<div class= "col col-md-3">
<a href="B-.php"><div class="panel panel-default">
  <div class="panel-body"><center>
<button type="button" class="blood">B-</button></center>
</div></div></a>
</div>

</div>
<div class="row">
<div class= "col col-md-3">
<a href="AB+.php"><div class="panel panel-default">
  <div class="panel-body"><center>
<button type="button" class="blood">AB+</button></center>
</div></div></a>
</div>
<div class= "col col-md-3">
<a href="AB-.php"><div class="panel panel-default">
  <div class="panel-body"><center>
<button type="button" class="blood">AB-</button></center>
</div></div></a>
</div>
<div class= "col col-md-3">
	<a href="O+.php"><div class="panel panel-default">
  <div class="panel-body"><center>
<button type="button" class="blood">O+</button></center>
</div></div></a>
</div>
<div class= "col col-md-3">
<a href="O-.php">	<div class="panel panel-default">
  <div class="panel-body"><center>
<button type="button" class="blood">O-</button></center>
</div></div></a>
</div>
</div>

<style>
	.blood{

background-image: url(img/x.jpg);

display: block;

width: 50%;
height: 50%;
color: white;
border: none;
padding: 49px 60px;
font-size: 60px;
cursor:pointer;



	}
	.blood:hover{
		background-color: #ddd;
		color: black;
	}
	h1 {
    font-style: italic;
    color: lightcoral;
    font-size: x-large;
}
</style>




