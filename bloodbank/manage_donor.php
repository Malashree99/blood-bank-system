<?php


include('includes/head.php');
include('includes/navbar_admin.php');
include('includes/connect.php');


?>
<div class="container">
<?php
if(isset($_GET['s']))

{

	if($_GET['s']=='true')
	{
  echo '<div class="alert alert-success">
  <strong>Success!</strong>Record deleted Successfully..
  </div>';
}
}
?>
<div class="container">
  <h2>DONOR REGISTRATED</h2>
  
  <table class="table">
    <thead>
      <tr>
      	<th>ACTION</th>
      	<th>SLNO.</th>
        <th>Name</th>
        <th>Address</th>
        <th>phone number</th>
        <th>age</th>
        <th>blood group</th>
        <th>Email address</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>

      <?php

      $i=0;
      $stmt = $conn->prepare("SELECT  * FROM donor_reg" ); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt as $info)

    {
    	$i=$i+1;
    	echo"<tr>";
    	echo'<td><a href="delete_donor.php?id='.$info['id'].'">'.'<button type="button" class="btn btn-danger">'."DELETE</button></td></td>";

echo "<td>".$i."</td>";
echo "<td>".$info['name']."</td>";
echo "<td>".$info['adress']."</td>";
echo "<td>".$info['phn']."</td>";
echo "<td>".$info['age']."</td>";
echo "<td>".$info['b_grp']."</td>";
echo "<td>".$info['ename']."</td>";
echo "<td>".$info['password']."</td>";
echo "</tr>";
}
?>

    </tbody>
  </table>
</div>
    





</div>