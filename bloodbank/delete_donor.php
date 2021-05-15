<?php
include('includes/connect.php');
 $id=$_GET['id'];

 echo $id;

try {
    

    // sql to delete a record
    $sql = "DELETE FROM donor_reg WHERE id=$id";

    // use exec() because no results are returned
    $conn->exec($sql);
    header("location:"."manage_donor.php?s=true");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();

     header("location:"."manage_donor.php?s=$sql");
    }


?>

