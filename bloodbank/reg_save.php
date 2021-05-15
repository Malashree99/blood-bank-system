<?php
$name=$_POST['Name'];
$adress=$_POST['Address'];
$phn=$_POST['phone'];
$age=$_POST['age'];
$b_grp=$_POST['bloodgroup'];
$ename=$_POST['Ename'];
$u_password=$_POST['Password'];



include('includes/connect.php');
 $sql = "INSERT INTO donor_reg ( name, adress, phn, age, b_grp, ename, password)
    VALUES ( '$name', '$adress', '$phn', '$age', '$b_grp', '$ename', '$u_password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header('location:'.'donor_login.php?s=success');
?>