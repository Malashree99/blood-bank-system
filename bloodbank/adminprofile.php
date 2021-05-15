<?php
include("includes/connect.php");

session_start();

$userid =$_SESSION['userid'];



$stmt = $conn->prepare("SELECT  * FROM user WHERE id='$userid'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
 foreach($stmt as $info)

    {
        $name=$info['name'];
    
        
}


$title = "admin Profile";
include 'includes/head.php';


    include 'includes/navbar_admin.php';


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
                            <td><?php echo $userid; ?></td>
                        </tr>
                        <tr>
                            <td><label>Name</label></td>
                            <td><?php echo $name; ?></td>
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


