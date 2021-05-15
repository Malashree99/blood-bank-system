<?php



include 'includes/head.php';
session_start();
include 'includes/connect.php';
$uname = $_POST['Ename'];
$password = $_POST['Password'];



         $stmt = $conn->prepare("SELECT * FROM donor_reg WHERE ename = '$uname' AND password = '$password'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt as $info) 
    { 

$_SESSION['donorid'] = $info['id'];


header("Location:"."donar.php");
include 'includes/navbar_donar.php';

    }

    	echo "User Name and password is wrong";


?>