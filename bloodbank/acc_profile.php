<?php
include("includes/connect.php");

session_start();

$acc_id =$_SESSION['acc_id'];


$stmt = $conn->prepare("SELECT  * FROM acc_reg WHERE id='$acc_id'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 foreach($stmt as $info)

    {
        $name=$info['name'];
        $address=$info['adress'];
        $phn=$info['phn'];
        $age=$info['age'];
        $b_grp=$info['b_grp'];
        $ename=$info['ename'];
        $password=$info['password'];

}


$title = "Acceptor Profile";
include 'includes/head.php';


    include 'includes/navbar_acceptor.php';


?>

<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h5>PROFILE</h5>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed table-bordered">
                        <tr>
                            <td><label>Id</label></td>
                            <td><?php echo $acc_id; ?></td>
                        </tr>
                        <tr>
                            <td><label>Name</label></td>
                            <td><?php echo $name; ?></td>
                        </tr>
                             <tr>
                            <td><label>ADDRESS</label></td>
                            <td><?php echo $address; ?></td>
                        </tr>
                         <tr>
                            <td><label>PHONE NUMBER</label></td>
                            <td><?php echo $phn; ?></td>
                        </tr>
                         <tr>
                            <td><label>AGE</label></td>
                            <td><?php echo $age; ?></td>
                        </tr>
                         <tr>
                            <td><label>BLOOD GROUP</label></td>
                            <td><?php echo $b_grp; ?></td>
                        </tr>
                         <tr>
                            <td><label>EMAIL</label></td>
                            <td><?php echo $ename; ?></td>
                        </tr>
                         <tr>
                            <td><label>PASSWORD</label></td>
                            <td><?php echo $password; ?></td>
                        </tr>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>