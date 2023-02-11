<?php include 'header.php'; 

if(isset($_POST['btn']))
{
    $cls_name=$_POST['cls_name'];
   $cls_descr=$_POST['description'];

  $data=[
        
        'cls_name'=>$cls_name,
        'cls_descr'=>$cls_descr,
        
        ];

  $ref='cls_tbl/';
  $postdata=$database->getReference($ref)->push($data);

  if($postdata==true)
  {
echo'<script type="text/javascript">
    alert("Record inserted");
    location="class.php";
    </script>';  }
  else
  {
echo'<script type="text/javascript">
    alert("Record not inserted");
    </script>';
  }
}

?>
<!--Container Main start-->
    <div class="height-100 bg-white">
        <form action="class.php" method="post">
            <br>
        	<h4>Add Class</h4>
        	<br>
        	<div class="col-sm-10">

        	<div class="row">
        		
        		<div class="col-sm-12">
        			<label>Class Name *</label>
        			<input type="text" name="cls_name" class="form-control" placeholder="Department name" required="">
        		</div>
        	   </div>
        	   <br>
        	<div class="row">

        		<div class="col-sm-12">
        			<label>Class Decription</label>
        			<input type="text" name="description" class="form-control" placeholder="Department decription">
        		</div>
        	</div>
             <br>
        	<div class="row">

        		<div class="col-sm-12">
        			
        			<input type="submit" name="btn" class="btn btn-primary" value="Submit">
        		</div>
        	</div>
            </div>
       </form>
    </div>
    <!--Container Main end-->
<?php include 'footer.php'; ?>