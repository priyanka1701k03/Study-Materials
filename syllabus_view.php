<?php include 'header.php'; ?>
<div class="container">
  <br>
 <h2>Syllabus List</h2>
  <table class="table">
  <thead class="thead-dark" style="background-color: black;color:white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Syb Name</th>
      <th scope="col">Syb Subject</th>
      <th scope="col">Syb Dept</th>
      <th scope="col">Syb Class</th>
      <th scope="col">Syb File</th>
      <th scope="col">Syb Description</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $ref="syb_tbl/";
                  
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
      <td>'.$row['syb_name'].'</td>
      <td>'.$row['syb_sub'].'</td>
      <td>'.$row['syb_dept'].'</td>
      <td>'.$row['syb_cls'].'</td>
      <td>'.$row['syb_file'].'</td>
      <td>'.$row['syb_descr'].'</td>
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