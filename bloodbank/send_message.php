<?php
error_reporting(0);

include 'includes/connect.php';


$id = $_GET['id'];

   $stmt = $conn->prepare("SELECT * FROM send_req WHERE id='$id'"); 
    $stmt->execute();

foreach ($stmt as $data) 
{
   $email = $data['email'];
}



// the message
$msg = "REQbdkjsfkjsb";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("$email","BLOOD BANK",$msg);


	echo "Mail sent success";


?>