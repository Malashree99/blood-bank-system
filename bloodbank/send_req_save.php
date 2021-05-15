<?php
$name=$_POST['name'];
$phn=$_POST['phone'];
$blood_req=$_POST['bloodgroup'];
$when_req=$_POST['date'];
$ename=$_POST['Ename'];
$details=$_POST['Details'];

 $when_req=date('Y-m-d',strtotime($when_req));

include('includes/connect.php');
 $sql = "INSERT INTO send_req ( name, phn, blood_req, when_req, email, details)
    VALUES ( '$name', '$phn', '$blood_req', '$when_req', '$ename', '$details')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    //header('location:'.'send_req.php?s=success');
?>