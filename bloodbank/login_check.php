<?php

session_start();
include 'include/connection.php';


$uname = $_POST['email'];
$password = $_POST['password'];



         $stmt = $conn->prepare("SELECT * FROM donor_reg WHERE ename = '$uname' AND password = '$password'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt as $data) 
    { 

$_SESSION['userid'] = $data['id'];



header("Location:"."donor_login.php");
    }


    	echo "Login Failed";





?>