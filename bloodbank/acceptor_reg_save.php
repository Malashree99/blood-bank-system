<?php
$name=$_POST['Name'];
$adress=$_POST['Address'];
$phn=$_POST['phone'];
$age=$_POST['age'];
$b_grp=$_POST['b_grp'];
$ename=$_POST['Ename'];
$password=$_POST['Password'];



include('includes/connect.php');
 $sql = "INSERT INTO  acc_reg ( name, adress, phn, age, b_grp, ename, password)
    VALUES ( '$name', '$adress', '$phn', '$age', 'b_grp', '$ename', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    header('location:'.'acceptor_reg.php?s=success');
?>