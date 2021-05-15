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
  <strong>Success!</strong>Record  Successfully..
  </div>';
}
}
?>
<div class="container">
  <h2>MANAGE REQUEST</h2>
  
  <table class="table">
    <thead>
      <tr>
      	<th>ACTION</th>
      	<th>SLNO.</th>
        <th>Name</th>
        <th>phone number</th>
        <th>blood requried</th>
        <th>when requried</th>
        <th>Email address</th>
        <th>Details</th>

              </tr>
    </thead>
    <tbody>

      <?php

      $i=0;
      $stmt = $conn->prepare("SELECT  * FROM send_req"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt as $info)

    {
    	$i=$i+1;
    	echo"<tr>";
    	echo'<td><a href="send_message.php?id='.$info['id'].'">'.'<button type="button" class="btn btn-success">'."send msg</button></td></td>";
echo "<td>".$i."</td>";
echo "<td>".$info['name']."</td>";
echo "<td>".$info['phn']."</td>";
echo "<td>".$info['blood_req']."</td>";
echo "<td>".$info['when_req']."</td>";
echo "<td>".$info['email']."</td>";
echo "<td>".$info['details']."</td>";
echo "</tr>";
}
?>

    </tbody>
  </table>
</div>
    





</div>