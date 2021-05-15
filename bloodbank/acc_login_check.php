<?php


include 'includes/connect.php';
include 'includes/head.php';
session_start();

$uname = $_POST['Ename'];
$password = $_POST['Password'];



         $stmt = $conn->prepare("SELECT * FROM acc_reg WHERE ename = '$uname' AND password = '$password'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt as $data) 
    { 

$_SESSION['acc_id'] = $data['id'];



header("Location:"."acceptor.php");
include 'includes/navbar_acceptor.php';

    }

    	echo "User Name and password is wrong";


?>