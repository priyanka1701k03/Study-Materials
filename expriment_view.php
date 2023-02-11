<?php include 'header.php'; ?>
<div class="container">
	<br>
 <h2>Expriment List</h2>
	<table class="table">
  <thead class="thead-dark" style="background-color: black;color:white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Exp Name</th>
      <th scope="col">Exp Subject</th>
      <th scope="col">Exp Dept</th>
      <th scope="col">Exp Class</th>
      <th scope="col">Exp File</th>
      <th scope="col">Exp Description</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$ref="exp_tbl/";
                  
                     $fetchdata=$database->getReference($ref)
                                          // ->orderByChild('fname')
                                          // ->equalTo($fname)
                                         ->getValue();
                      if($fetchdata > 0)
                      {
                      foreach($fetchdata as $key => $row)
                      {
    echo '<tr>
      <th scope="row">1</th>
      <td>'.$row['exp_name'].'</td>
      <td>'.$row['exp_sub'].'</td>
      <td>'.$row['exp_dept'].'</td>
      <td>'.$row['exp_cls'].'</td>
      <td>'.$row['exp_file'].'</td>
      <td>'.$row['exp_descr'].'</td>
    </tr>';
}
}
else
{
	echo 'Data Not Found';
}
    ?>
    
  </tbody>
</table>


</div>
<?php include 'footer.php'; ?>