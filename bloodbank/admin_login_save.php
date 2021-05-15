<?php

include("includes/connect.php");

include("includes/head.php");


session_start();


$Email=$_POST['Ename'];
$Password=$_POST['Password'];

$stmt = $conn->prepare("SELECT  * FROM user WHERE Ename='$Email' AND Password ='$Password'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt as $info)

    {
        $_SESSION['position']=$info['postion'];
    	$_SESSION['userid']=$info['id'];

         header("Location:"."admin.php");
    include("includes/navbar_admin.php");
     }



     echo "User Name and password is wrong";




?>
