<?php

$Ename= $_POST['Ename'];

$Password=$_POST['Password'];



include('includes/connect.php');

    $sql = "INSERT INTO user (Ename, Password)
    VALUES ('$Ename','$Password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header('location:'.'donar.php?s=success');
?>
