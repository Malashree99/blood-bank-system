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
  <h2>VIEW FEEDBACK</h2>
  
  <table class="table">
    <thead>
      <tr>
      	
      	<th>SLNO.</th>
        
        <th>FEEDBACK</th>

              </tr>
    </thead>
    <tbody>

      <?php

      $i=0;
      $stmt = $conn->prepare("SELECT  * FROM feedback"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach($stmt as $info)

    {
    	$i=$i+1;
    	echo"<tr>";
    	//echo'<td><a href="send_message.php?id='.$info['id'].'">'.'<button type="button" class="btn btn-success">'."send msg</button></td></td>";
echo "<td>".$i."</td>";

echo "<td>".$info['feedback']."</td>";
echo "</tr>";
}
?>

    </tbody>
  </table>
</div>
    





</div>