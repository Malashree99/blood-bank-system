<?php
include('includes/head.php');
include('includes/navbar.php');
include('includes/connect.php');

$text = $_POST['feedback']; 

 $sql = "INSERT INTO  feedback (feedback)
    VALUES ( '$text')";
    // use exec() because no results are returned
    $conn->exec($sql);
   // echo "New record created successfully";


header('location:'.'feedback.php?s=success');
?>